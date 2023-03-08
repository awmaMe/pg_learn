<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class PasswordInput extends Component
{
    public function __construct(public string $name)
    {
    }

    public function render()
    {
        return view('components.form.password-input');
    }
}
