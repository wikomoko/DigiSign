<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function login() {
        return view('pages.admin.login');
    }

    function checkLogin() {
        
    }

    function beranda() {
        return view('pages.admin.beranda');
    }
}
