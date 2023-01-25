<?php

namespace App\View\Components\Navigation;

use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(public string $link, public string $label)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation.item');
    }
}
