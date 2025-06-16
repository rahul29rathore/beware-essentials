<?php

namespace App\Http\Livewire\Utility\Component;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Livewire\WithPagination;
use Str;

abstract class SearchableComponent extends Component
{
	use WithPagination;

    public    $search   = '';
    protected $paginate = 12;
    private   $query;
	
	public function construct($id)
    {
        parent::construct($id);
        $this->prepareModelQuery();
    }
	
	private function prepareModelQuery()
    {
        $model       = app($this->model());
        $this->query = $model->newQuery();
    }
	
	protected function resetQuery()
    {
        $this->prepareModelQuery();
    }
	
	protected function getQuery()
    {
        return $this->query;
    }
	
	protected function setQuery(Builder $query)
    {
        $this->query = $query;
    }
	
	protected function paginate($search = true)
    {
        if ($search) {
            $this->filterResults();
        }

        $all         = $this->query->paginate($this->paginate);
        $currentPage = $all->currentPage();
        $lastPage    = $all->lastPage();
        if ($currentPage > $lastPage) {
            $this->page = $lastPage;
        }

        return $this->query->paginate($this->paginate);
    }
	
	protected function filterResults()
    {
        $searchableFields = $this->searchableFields();
        $search           = $this->search;

        $this->query->when(! empty($search), function (Builder $q) use ($search, $searchableFields) {
            $searchString = '%'.$search.'%';
            foreach ($searchableFields as $field) {
                if (Str::contains($field, '.')) {
                    $field = explode('.', $field);
                    $q->orWhereHas($field[0], function (Builder $query) use ($field, $searchString) {
                        $query->whereRaw("lower($field[1]) like ?", $searchString);
                    });
                } else {
                    $q->orWhereRaw("lower($field) like ?", $searchString);
                }
            }
        });

        return $this->query;
    }

	abstract function model();
	abstract function searchableFields();
}