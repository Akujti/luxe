<?php

namespace App\View\Components\Contract;

use Illuminate\View\Component;

class SinglePost extends Component
{
    public $contract;
    public function __construct($contract)
    {
        $this->contract = $contract;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contract.single-post');
    }
}
