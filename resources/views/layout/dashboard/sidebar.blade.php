<div class="container border-end vh-100">
    <nav class="navbar bg-white pt-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('base') }}">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" height="50px" class="me-2">
                <span class="font-poppins text-color-scheme2 text-size-25 text-bold">DigiSign</span>
            </a>
        </div>
    </nav>
    <div class="mt-5 ">
        <p class="font-poppins text-size-20 text-color-scheme2 text-bold text-center text-truncate">{{ Auth::user()->name }}</p>
        <p class="font-poppins text-size-15 text-color-scheme2 text-regular text-center text-truncate">{{ Auth::user()->email }}</p>
        <a href="{{ route('beranda') }}"
            class="btn-sidebar-hover link-underline link-underline-opacity-0 d-flex justify-content-start align-items-center mt-5 {{ Request::is('beranda*') ? 'bg-color-scheme1' : '' }}  rounded-4 p-xl-3 p-md-2 p-4">
            <img src="{{ asset('assets/images/icon_beranda.svg') }}" height="25px" alt="icon_beranda" class="me-2" />
            <span
                class="font-poppins text-size-20 {{ Request::is('beranda*') ? 'text-white' : 'text-color-scheme2' }}">Beranda</span>
        </a>
        <a href="{{ route('akun') }}"
            class="btn-sidebar-hover link-underline link-underline-opacity-0 d-flex justify-content-start align-items-center mt-2  rounded-4 p-xl-3 p-md-2 p-4 {{ Request::is('akun*') ? 'bg-color-scheme1' : '' }}">
            <img src="{{ asset('assets/images/icon_akun.svg') }}" height="25px" alt="icon_beranda" class="me-2" />
            <span
                class="font-poppins text-size-20 {{ Request::is('akun*') ? 'text-white' : 'text-color-scheme2' }}">Akun</span>
        </a>
        <a href="{{ route('logout') }}"
            class="btn-sidebar-hover link-underline link-underline-opacity-0 d-flex justify-content-start align-items-center mt-2  rounded-4 p-xl-3 p-md-2 p-4">
            <img src="{{ asset('assets/images/icon_keluar.svg') }}" height="25px" alt="icon_beranda" class="me-2" />
            <span class="font-poppins text-size-20 text-color-scheme2">Keluar</span>
        </a>
    </div>
</div>
