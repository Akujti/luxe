<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Profile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $user;
    public $my_profile = true;
    public function __construct($user)
    {
        $this->user = $user ?? auth()->user();
        $this->my_profile = $user ? false : true;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile');
    }
}
