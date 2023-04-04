<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VerbiageFormText extends Component
{
    public $formInfo;
    public function __construct($formInfo)
    {
        $this->formInfo = $formInfo;
    }

    public function render()
    {
        return view('components.verbiage-form-text');
    }
}
