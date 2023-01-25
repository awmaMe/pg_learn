<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class SubmitButton extends Component
{
    public function __construct(public string $label)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.submit-button');
    }
}
