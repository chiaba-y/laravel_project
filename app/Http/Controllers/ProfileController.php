<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        if(Auth::guard($guard)->guest()){
            $MyPageName = Auth::user();

            return view('/main/profile', compact('MyPageName->name'));
        } else {
            $name = '名前がありません';

            return view('/main/profile');
        }        
    }
}
