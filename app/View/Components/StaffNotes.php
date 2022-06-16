<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StaffNotes extends Component
{
    
    public $note;
    public function __construct($note)
    {
        $this->note = $note;
    }
    
    public function render()
    {
        return view('components.staff-notes');
    }
}
