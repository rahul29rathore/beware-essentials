<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\User;

class Users extends Component
{
    use WithPagination;

    public $search            = '';
    public $perpage        	  = 20;
	
	public $user_type;
	public $selected_user;
	
    protected $sortBy         = 'created_at';
    protected $sortOrder      = 'desc';
    
	protected $queryString    = ['search'];
	
    public function mount()
    {
        $this->resetPage();
    }
	
	public function updatingSearch()
    {
        $this->resetPage();
    }

    
    public function render()
    {

        $users = User::when($this->search, function($q){
                            $q->where('id', 'like', '%'.($this->search).'%')
                              ->orWhere('name', 'like', '%'.($this->search).'%')
                              ->orWhere('email', 'like', '%'.($this->search).'%');
                        })
                        ->orderBy($this->sortBy, $this->sortOrder)->paginate($this->perpage);

        return view('livewire.admin.users.view', [
            'users' => $users
        ]);
    }
	
	public function openUserTypeModal(User $user)
	{
		$this->selected_user = $user;
		$this->user_type     = $user->is_admin;

		$this->emit('showEditUserTypeModal');
	}
	
	public function changeUserType()
	{
		$this->selected_user->is_admin = $this->user_type;
		$this->selected_user->save();
		
		$this->user_type = 0;
		$this->emit('hideEditUserTypeModal');
	}
    
}