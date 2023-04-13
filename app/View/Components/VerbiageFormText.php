<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VerbiageFormText extends Component
{
    public $formInfo;
    public $afterSubmit;
    public function __construct($formInfo, $afterSubmit = null)
    {
        $this->formInfo = $formInfo;
        $this->afterSubmit = $afterSubmit;
    }

    public function render()
    {
        return view('components.verbiage-form-text');
    }
}
