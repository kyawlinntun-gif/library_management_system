<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id()) {
            if(Auth::user()->user_type === 'admin') {
                return view('admin.index');
            }
            if(Auth::user()->user_type === 'user') {
                return view('home.index');
            }
        } else {
            return redirect()->back();
        }
    }
}
