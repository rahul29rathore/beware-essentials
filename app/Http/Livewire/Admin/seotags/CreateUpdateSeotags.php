<?php

namespace App\Http\Livewire\Admin\Seotags;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\SeoTagsModel;
use Illuminate\Support\Facades\Auth;

class CreateUpdateSeotags extends Component
{
	public $seotags = [];
	public $selected_id;

	protected $rules = [
		'seotags.name'  => 'required|max:255',
		'seotags.slug'  => 'required|max:255',
		'seotags.meta_title' => 'nullable',
		'seotags.meta_description' => 'nullable',
		'seotags.meta_keywords' => 'nullable',
		'seotags.other' => 'nullable',
		'seotags.content' => 'required',
		'seotags.updated_person_name' => 'nullable',
		'seotags.updated_person_email' => 'nullable',
	];

	protected $validationAttributes = [
		'seotags.name' => 'SEO Tag Name',
		'seotags.slug' => 'SEO Tag Slug',
		'seotags.content' => 'SEO Tag Content'
	];

	public function mount()
	{
		if ($this->selected_id) {
			$this->seotags = $this->mapFields();
		}
	}

	public function updated($propertyName)
	{
		$this->validateOnly($propertyName);
	}

	public function updatedSeotagsName($value)
	{
		$this->seotags['slug'] = Str::slug($value, '-');
	}

	public function mapFields()
	{
		$tag = SeoTagsModel::findOrFail($this->selected_id);

		return [
			'name' => $tag->name,
			'slug' => $tag->slug,
			'meta_title' => $tag->meta_title,
			'meta_description' => $tag->meta_description,
			'meta_keywords' => $tag->meta_keywords,
			'other' => $tag->other,
			'content' => $tag->content,
			'updated_person_name' => $tag->updated_person_name,
			'updated_person_email' => $tag->updated_person_email
		];
	}

	public function create()
	{
		$this->validate();

		$tag = new SeoTagsModel();

		$tag->fill(Arr::only($this->seotags, [
			'name',
			'slug',
			'meta_title',
			'meta_description',
			'meta_keywords',
			'other',
			'content',
		]));

		$user = Auth::user();
		$tag->updated_person_name = $user->name ?? '';
		$tag->updated_person_email = $user->email ?? '';


		if ($tag->save()) {
			return redirect()->route('admin.seotags.index');
		}

		return true;
	}

	public function save()
	{
		$this->validate();

		$tag = SeoTagsModel::findOrFail($this->selected_id);
		$tag->fill(Arr::only($this->seotags, [
			'name',
			'slug',
			'meta_title',
			'meta_description',
			'meta_keywords',
			'other',
			'content',
		]));
		$user = Auth::user();
		$tag->updated_person_name = $user->name ?? '';
		$tag->updated_person_email = $user->email ?? '';


		if ($tag->save()) {
			return redirect()->route('admin.seotags.index');
		}

		return true;
	}

	public function render()
	{
		return view('livewire.admin.seotags.create');
	}
}
