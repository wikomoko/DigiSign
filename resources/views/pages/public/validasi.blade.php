@include('layout.dashboard.header')

@include('layout.dashboard.header')

<nav class="navbar bg-white">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('base') }}">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" height="50px" class="me-2">
            <span class="font-poppins text-color-scheme2 text-size-30 text-bold">DigiSign</span>
        </a>
    </div>
</nav>

<section class="">
    <div class="container mt-5 ">
        <p class="font-poppins text-bold text-size-30 text-color-scheme2  d-none d-md-block">Validasi Keaslian</p>
        <p class="font-poppins text-bold text-size-24 text-color-scheme2  d-md-none">Validasi Keaslian</p>
        
        <p class="font-poppins mt-3 text-size-20 text-color-scheme2 text-regular ">
            TTD Atas Nama 
        </p>
        <p class="font-poppins text-color-scheme2 text-size-20  text-bold">{{ $data ? $data->user->name : 'tidak ditemukan' }}</p>
       
        <p class="font-poppins mt-3 text-size-20 text-color-scheme2 text-regular ">
            Dibuat Pada 
        </p>
        <p class="font-poppins text-color-scheme2 text-size-20  text-bold">{{ $data ? $data->created_at : 'tidak ditemukan' }}</p>

        <p class="font-poppins mt-3 text-size-20 text-color-scheme2 text-regular ">
            Email pembuat 
        </p>
        <p class="font-poppins text-color-scheme2 text-size-20  text-bold">{{ $data ? $data->user->email : 'tidak ditemukan' }}</p>

        <p class="font-poppins mt-3 text-size-20 text-color-scheme2 text-regular ">
            Catatan 
        </p>
        <div class="mb-3">
            <textarea name="" id="" cols="80" rows="10" class="form-control px-4"
                id="text" >{{ $data ? $data->message : 'tidak ditemukan' }}</textarea>
        </div>

        <div class="text-center mb-5">
            @if ($data)
                <x-button.secondary type="submit" href="#" class="mt-2">
                    <span class="font-poppins text-size-20 text-medium">Dinyatakan VALID/ASLI</span>
                </x-button.secondary>
            @else
                <x-button.forte type="submit" href="#" class="mt-2">
                    <span class="font-poppins text-size-20 text-medium">TIDAK VALID/ASLI</span>
                </x-button.forte>
            @endif
           
        </div>

    </div>
</section>

@include('layout.dashboard.footer')
