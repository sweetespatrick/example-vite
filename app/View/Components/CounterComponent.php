<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CounterComponent extends Component
{
   
    public $count =1;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
      $count = $this->count++;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.counter-component');
    }
}
