@include('layout.dashboard.header')

@include('layout.dashboard.header')

<nav class="navbar bg-white fixed-top d-none d-md-block">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('base') }}">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" height="50px" class="me-2">
            <span class="font-poppins text-color-scheme2 text-size-30 text-bold">DigiSign</span>
        </a>
    </div>
</nav>

<section class="d-flex vh-100 flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row mt-5 mt-md-0">
            <div class="col-md-6 d-flex justify-content-stretch mt-5 mt-md-0">
                <div class="container ">
                    <img src="{{ asset('assets/images/iconic_flipped.svg') }}" class="img-fluid" alt="iconic" />
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-stretch px-lg-5">
                <div class="container px-md-5">
                    <form method="POST" action="{{ route('checkDaftar') }}">
                        <p class="font-poppins text-size-30 text-color-scheme2 text-regular">Silahkan Daftar</p>
                        @csrf
                         @if (Session::has('failed'))
                            <div class="alert alert-danger">
                                <p>{{Session::get('failed')}}</p>
                            </div>
                        @endif
                        <div class="mb-3 mt-5">
                            <input type="text" class="form-control bg-custom-input px-4" id="text"
                                placeholder="Nama Lengkap" name="name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control bg-custom-input px-4" id="email"
                                placeholder="Email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control bg-custom-input px-4" id="password"
                                placeholder="Password" name="password" required>
                        </div>

                        <div class="mt-5 d-flex justify-content-between align-items-center">
                            <span>
                                <a href="{{ route('login') }}">sudah memiliki akun ?</a>
                            </span>
                            <x-button.primaryPost type="submit">
                                <span class="font-poppins text-size-20 text-medium">Login</span>
                            </x-button.primaryPost>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layout.dashboard.footer')
