<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Menuitem;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $items = Menuitem::where('location', '=', 'header')
            ->orderBy('order')
            ->get();
        return view('components.project.header', [
            'items'     => $items,
        ]);
    }
}
