<div x-cloak class="text-center">
    <input type="text" wire:model.defer= "query" />
  
    <button wire:click="search">search</button>
    <ul>
      @foreach($users as $user)
        <li>
          {{ $user->name }}
        </li>
      @endforeach
    </ul>
  </div>
  
