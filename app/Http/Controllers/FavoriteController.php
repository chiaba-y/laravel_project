<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function show()
    {
        return view('/main/favorite');
    }
}
