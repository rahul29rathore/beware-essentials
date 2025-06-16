<?php

namespace App\Http\Livewire\Admin\Blogs;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\blogsModel;

class Blogs extends Component
{
    use WithPagination;

    public $search            = '';
    public $perpage        	  = 20;
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

        $blogs = blogsModel::when($this->search, function($q)
        {
                            $q->where('id', 'like', '%'.($this->search).'%')
                              ->orWhere('title', 'like', '%'.($this->search).'%')
                              ->orWhere('meta_description', 'like', '%'.($this->search).'%')
                              ->orWhere('meta_keywords', 'like', '%'.($this->search).'%')
                              ->orWhere('auther', 'like', '%'.($this->search).'%')
                              ->orWhere('created_at', 'like', '%'.($this->search).'%')
							 ->orWhereHas('category', function ( $query ) {
								$query->where('name', 'like', '%'.($this->search).'%');
								});
                       })
                        ->orderBy($this->sortBy, $this->sortOrder)->paginate($this->perpage);

        return view('livewire.admin.blogs.view', [
            'blogs' => $blogs
        ]);
    }
	
	
	public function setSelected(blogsModel $blogsModel)
	{
		$this->selected = $blogsModel;
		$this->emit('showConfirmModal');
	}
	
	public function delete()
	{
		$this->selected->delete();
	}
    
}