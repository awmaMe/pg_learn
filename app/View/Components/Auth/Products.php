<?php

namespace App\View\Components\Auth;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Products extends Component
{
    public Collection $products;
    public function __construct()
    {
        $this->products = request()->user()->products->sortBy('created_at');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.products');
    }
}
