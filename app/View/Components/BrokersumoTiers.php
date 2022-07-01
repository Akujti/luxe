<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BrokersumoTiers extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $user;
    public $row;
    public function __construct($user, $row = "")
    {
        $this->user = $user;
        $this->row = $row;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.brokersumo-tiers');
    }
}
