<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class PelatihanLivewire extends Component
{
    public $searchModul;
    public $perPage = 1;
    use WithPagination;
    public function resetPage()
    {
        $this->gotoPage(1, 'Page');
    }
    public function loadMore()
    {
        $this->perPage = $this->perPage + 1;
    }
    public function render()
    {
        $searchModul = '%' . $this->searchModul . '%';
        return view('livewire.pelatihan-livewire', [
            'moduls' => \App\Models\mdl_course::where('fullname', 'LIKE', $searchModul)->orderBy('id', 'DESC')->paginate($this->perPage, ['*'], 'Page'),
        ]);
    }
}
