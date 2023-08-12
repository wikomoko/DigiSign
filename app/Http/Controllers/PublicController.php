<?php

namespace App\Http\Controllers;

use App\Models\Ttd;
use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function index() {
        return view('pages.landing.base');
    }

    function validasi($id) {
        $data = Ttd::with('user')->where('id',$id)->get()->first();
        return view('pages.public.validasi',compact('data'));
    }
}
