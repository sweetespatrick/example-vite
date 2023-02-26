<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DatePicker extends Component
{
    public $selectedDate = '';

    public function render()
    {
        return view('livewire.date-picker');
    }
}