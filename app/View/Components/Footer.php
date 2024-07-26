<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Menuitem;

class Footer extends Component
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
        //$rt_menuitems = Menuitem::where('location', '=', 'footer_1')->get();
        $lf_menuitems = Menuitem::where('location', '=', 'footer_2')->get();
        return view('components.project.footer', [
            'left_menuitems'        => $lf_menuitems,
        //    'right_menuitems'       => $rt_menuitems,
        ]);
    }
}
