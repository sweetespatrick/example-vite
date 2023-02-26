<div class="text-center">
    aphine in livewire learinddddd
   
    <div x-data="{ open: @entangle('showDropdown') }">
      <button @click="open = true">Show More...</button>

      <x-slot name="trigger">
        <button class="bg-gray-800  text-white rounded-full "@click="open = true">Show More...</button>
      </x-slot>
 
        <ul x-show="open" @click.outside="open = false">
            <li><button wire:click="archive">Archive</button></li>
            <li><button wire:click="delete">Delete</button></li>
        </ul>
    </div>

</div>



