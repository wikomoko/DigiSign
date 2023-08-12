@extends('layout.dashboard.main')

@section('content')
    <div class="container mt-3">
        <p class="font-poppins text-center text-bold text-size-30 text-color-scheme2  d-none d-md-block">Perhatian</p>
        <p class="font-poppins text-center text-bold text-size-24 text-color-scheme2  d-md-none">Perhatian</p>

        <p class="font-poppins mt-5 text-size-24 text-color-scheme2 text-regular">
            Tanda tangan digital andai ini ter suspend karena akun gratis hanya mengizinkan maksimal 3 TTD DIgital, untuk dapat membuat lebih atau membuka yang tersuspen silahkan melanjutakan langgana premium
        </p>

        <div class="text-start ">
            <x-button.ternary type="button" href="{{ route('premium') }}" class="mt-3 mt-md-5" >
                <span class="font-poppins text-size-20 text-regular text-white">Upgrade Premium</span>
            </x-button.ternary>
            <x-button.forte type="button" href="{{ route('beranda') }}" class="mt-3 mt-md-5" >
                <span class="font-poppins text-size-20 text-regular text-white">Batal</span>
            </x-button.forte>
        </div>
        
        
    </div>
@endsection
