<?php

namespace App\Http\Livewire\Admin\seotags;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\SeoTagsModel;

class seotags extends Component
{
    use WithPagination;

    public $search            = '';
    public $perpage              = 20;
    public $selected;


    public $sortBy         = 'created_at';
    public $sortOrder      = 'desc';

    protected $queryString = ['search'];
    protected $listeners   = ['confirmDelete' => 'delete'];

    public function mount()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function fetchOrder($sortBy, $sortOrder)
    {
        $this->sortBy    = $sortBy;
        $this->sortOrder = $sortOrder;
    }

    public function render()
    {

        $seotags = SeoTagsModel::when($this->search, function ($q) {
            $q->where('id', 'like', '%' . ($this->search) . '%')
                ->orWhere('name', 'like', '%' . ($this->search) . '%')
                ->orWhereHas('slug', function ($query) {
                    $query->where('name', 'like', '%' . ($this->search) . '%');
                });
        })
            ->orderBy($this->sortBy, $this->sortOrder)->paginate($this->perpage);

        return view('livewire.admin.seotags.view', [
            'seotags' => $seotags
        ]);
    }


    public function setSelected(SeoTagsModel $SeoTagsModel)
    {
        $this->selected = $SeoTagsModel;
        $this->emit('showConfirmModal');
    }

    public function delete()
    {
        $this->selected->delete();
    }
}
