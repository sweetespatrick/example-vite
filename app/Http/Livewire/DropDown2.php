<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DropDown2 extends Component
{
    public $showDropdown = false;

    public function archive()
    {
        $this->showDropdown = false;
    }

    public function delete()
    {
        $this->showDropdown = false;
    }

    public function render()
    {
        return view('livewire.drop-down2');
    }
}
