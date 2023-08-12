@extends('layout.dashboard.main')

@section('content')
    <div class="container mt-3">
        <p class="font-poppins text-size-30 text-color-scheme2 text-medium d-none d-md-block">Akun Saya</p>
        <p class="font-poppins text-size-24 text-color-scheme2 text-medium d-md-none">Akun Saya</p>
        <div class="mt-2">
            <form method="POST" action="#" class="">
                @csrf
                <p class="font-poppins text-size-20 text-color-scheme2 text-regular">Nama Lengkap</p>
                <div class="mb-3">
                    <input type="text" class="form-control bg-custom-input px-4" id="text"
                        value="{{ $akun->name }}" required>
                </div>
                <p class="font-poppins text-size-20 text-color-scheme2 text-regular">Email</p>
                <div class="mb-3">
                    <input type="email" class="form-control bg-custom-input px-4" id="email"
                        value="{{ $akun->email }}" required>
                </div>
                <p class="font-poppins text-size-20 text-color-scheme2 text-regular">Password</p>
                <div class="mb-3">
                    <input type="password" class="form-control bg-custom-input px-4" id="password" required>
                </div>
                <x-button.primaryPost type="submit">
                    <span class="font-poppins text-size-20 text-medium">Simpan</span>
                </x-button.primaryPost>
                <br class="d-none d-lg-block" />
            </form>
            <p class="font-poppins text-size-20 text-color-scheme2 text-regular mt-3">Status Membership</p>
            <div class="d-flex justify-content-between align-items-center">
                <span class="font-poppins text-size-20 text-color-scheme2 text-bold">
                    {{ $akun->membership ? 'Premium' : 'Regular' }}
                </span>
                @if (!$akun->membership)
                    <x-button.ternary type="submit" href="{{ route('premium') }}">
                        <span class="font-poppins text-size-20 text-medium text-color-scheme2">Ke Premium</span>
                    </x-button.ternary>
                @endif
            </div>
        </div>
    </div>
@endsection
