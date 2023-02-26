<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Search extends Component
{
    public $query = "Search Here";
    public $users;

    public function search()
    {
        
    }

    public function render()
    {
        $query = '%' . $this->query . '%';
        $this->users = User::where('name','like',$query)->get();

        return view('livewire.search');
    }
   
}
