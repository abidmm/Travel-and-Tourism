<?php

namespace App\Livewire;

use App\Models\International;
use Livewire\Component;

class Searching extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.searching', [
            'internationals' => International::where('place', $this->search)->get()
        ]);
    }
}
