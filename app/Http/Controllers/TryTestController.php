<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\News;
use App\Models\Menuitem;

class TryTestController extends Controller
{
    public function test()
    {
       dump(count(Menuitem::where('location', '=', 'footer_2')->get()));
    }
}
