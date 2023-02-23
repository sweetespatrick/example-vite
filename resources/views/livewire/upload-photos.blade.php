<div x-cloak class="text-center">
   <form wire:submit.prevent= "save">
    
   
     @if ($photo)
        Photo Preview:
        <img src="{{ $photo->temporaryUrl() }}">
     @endif

    <input type="file" wire:model="photo">
    <div wire:loading wire:target="photo">Uploading...</div>

    @error('photo') <span class="error">{{ $message}}</span> @enderror

    <button type="submit" >Save Photo</button>

   </form>

   
</div>



   

