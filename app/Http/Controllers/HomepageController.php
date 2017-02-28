<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //

    public function __invoke($subpage = null)
    {
        $homepage_view = view('homepage');

        return $homepage_view;
    }
}
