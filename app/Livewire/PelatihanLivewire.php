<?php

namespace App\Livewire;

use Livewire\Component;

class PelatihanLivewire extends Component
{
    public $searchModul;
    public function render()
    {
        $searchModul = '%'.$this->searchModul.'%';
        return view('livewire.pelatihan-livewire',[
            'moduls' => ['Test','Test2','Test3','Test4','Test5', 'Test6']
        ]);
    }
}
