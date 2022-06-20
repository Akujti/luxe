<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id, $centered, $title;
    public function __construct($id, $centered, $title)
    {
        $this->id = $id;
        $this->centered = $centered;
        $this->title = $title;
    }

   
    public function render()
    {
        return view('components.modal');
    }
}
