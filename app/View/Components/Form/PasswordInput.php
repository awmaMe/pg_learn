<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class PasswordInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $name, public ?string $placeholder = null)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.password-input');
    }
}
