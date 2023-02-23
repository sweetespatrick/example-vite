<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadPhotos extends Component
{
    use WithFileUploads;

    public $photo;

    public function updatedPhoto()
    {
        $this->validate([

            'photo' =>'image|max:1024',

        ]);

    }

    public function save()
    {
        $this->photo->store('photos');
    }
      

    public function render()
    {
        return view('livewire.upload-photos');

    }
}
