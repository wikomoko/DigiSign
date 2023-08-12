@extends('layout.dashboard.main')

@section('content')
    <div class="container mt-3">
        <p class="font-poppins text-center text-bold text-size-30 text-color-scheme2  d-none d-md-block">Langganan Premium</p>
        <p class="font-poppins text-center text-bold text-size-24 text-color-scheme2  d-md-none">Langganan Premium</p>

        <p class="font-poppins mt-5 text-size-24 text-color-scheme2 text-regular">
            Terima kasih telah memilih untuk berlangganan /upgrade akun anda ke premium. Nikmati kesempatan untuk membuat TTD Digital tidak terbatas.
        </p>

        <p class="font-poppins mt-5 text-size-24 text-color-scheme2 text-regular">
            Silahkan melakukan pembayaran ke akun DANA berikut:
        </p>

        <p class="font-poppins text-size-24 text-color-scheme2 text-bold">
            087881xxxxxxxx - atas nama Widi Yatmoko
        </p>

        <p class="font-poppins mt-5 text-size-24 text-color-scheme2 text-regular">
            Jika anda sudah melakukan pembayaran, silahkan konfirmasi melalui WA berikut:
        </p>
        <p class="font-poppins text-size-24 text-color-scheme2 text-bold">
            087881xxxxxxxx
        </p>
        <p class="font-poppins mt-5 text-size-24 text-color-scheme2 text-regular">
            kemudian tunggu sampai akun anda diupdate.
        </p>

        <div class="text-center mt-5">
            <x-button.primary type="button" href="{{ route('beranda') }}" >
                <span class="font-poppins text-size-20 text-regular text-white">Kembali ke Beranda</span>
            </x-button.primary>
        </div>
        
        
    </div>
@endsection
