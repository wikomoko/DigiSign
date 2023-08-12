<?php

namespace App\Http\Controllers;

use App\Models\Ttd;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    function login()
    {
        if (Auth::check()) {
            return redirect()->route('beranda');
        }
        return view('pages.customer.login');
    }

    function checkLogin(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->route('beranda');
        } else {
            echo "nothing";
        }

        return back()->with('failed', 'Periksa lagi Email dan Sandi Anda');
    }

    function daftar()
    {
        return view('pages.customer.daftar');
    }

    function checkDaftar(Request $request)
    {
        $request->validate([
            'email' => 'unique:users,email'
        ], [
            'email.unique' => 'Email sudah terdaftar'
        ]);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->membership = false;
            $user->save();

            return redirect()->route('login')->with('success', 'Akun Berhasil Dibuat, silahkan Login');
        } catch (\Throwable $th) {
            return back()->with('failed', 'Akun Gagal Dibuat ');
        }
    }

    function beranda()
    {
        $datas = Ttd::all()->where('id_user', Auth::user()->id);
        return view('pages.customer.beranda', compact('datas'));
    }

    function akun()
    {
        $akun = Auth::user();
        return view('pages.customer.akun', compact('akun'));
    }

    function buatttd()
    {
        return view('pages.customer.buatttd');
    }

    function saveTtd(Request $request)
    {

        try {

            $note = new Ttd();
            $note->id_user = Auth::user()->id;
            $note->message = $request->message;
            $note->status = true;
            $note->save();

            return redirect()->route('beranda')->with('success', 'Berhasil Tambah TTD');
        } catch (\Throwable $th) {
            return redirect()->route('beranda')->with('failed', 'Gagal Tambah TTD');
        }
    }

    function lihatttd($id)
    {
        $data = Ttd::where('id', $id)->get()->first();
        return view('pages.customer.lihatttd', compact('data'));
    }

    function premium()
    {
        return view('pages.customer.premium');
    }

    function terblock()
    {
        return view('pages.customer.terblock');
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
