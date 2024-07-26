<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function about()
    {
        return 'true';
    }

    public function contacts()
    {
        return 'tttrue';
    }
}
