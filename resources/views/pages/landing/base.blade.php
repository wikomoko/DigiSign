@extends('layout.landing_page.main')

@section('content')
    <section id="beranda">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 d-md-none">
                    <div class="container">
                        <img src="{{ asset('assets/images/iconic_mascot.svg') }}" class="img-fluid" alt="iconic_mascot">
                    </div>
                </div>
                <div class="col-md-6 p-md-5 d-md-flex flex-column align-items-start justify-content-between">
                    <div>
                        <p class="font-poppins text-size-40 text-bold text-color-scheme2 d-none d-md-block">
                            Digitalisasi tanda tangan anda secara cepat dan praktis.
                        </p>
                        <p class="font-poppins text-size-30 text-center text-bold text-color-scheme2 d-md-none">
                            Digitalisasi tanda tangan anda secara cepat dan praktis.
                        </p>
                        <p class="font-poppins text-size-20 text-medium text-center text-md-start text-color-scheme2">
                            Buat tanda tangan digital dalam QR Code dan pakai dimana saja dengan praktis, mudah, cepat, dan
                            setiap saat.
                        </p>
                    </div>
                    <div class="text-center text-md-start">
                        <x-button.primary type="button" href="#">
                            <span class="font-poppins text-size-20 text-medium">Daftar</span>
                        </x-button.primary>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="container">
                        <img src="{{ asset('assets/images/iconic_mascot.svg') }}" class="img-fluid" alt="iconic_mascot">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-color-scheme3 py-5" id="tentang">
        <div class="container my-md-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <img src="{{ asset('assets/images/about_img.png') }}" class="img-fluid" alt="about_img" />
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/curve.svg') }}" width="30%" alt="">
                    <p class="font-poppins text-size-50 text-color-scheme2 text-bold mt-3 d-none d-lg-block">Berkenalan
                        dengan DigiSign</p>
                    <p class="font-poppins text-size-30 text-color-scheme2 text-center text-bold mt-3 d-lg-none">Berkenalan dengan
                        DigiSign</p>
                    <p class="font-poppins text-size-20 text-regular text-center text-md-start text-color-scheme2">
                        DigiSign adalah 100% karya anak bangsa yang berusaha ikut serta dalam percepetan kemajuan digital
                        bangsa. DigiSign menawarkan pelayanan pembuatan tanda tangan digital yang mudah, cepat, dan praktis.
                    </p>
                    <p class="font-poppins text-size-20 text-regular text-center text-md-start text-color-scheme2">
                        DigiSign menawarkan akun gratis yang dapat digunakan. DigiSign juga memiliki fitur untuk melakukan
                        validasi atau memeriksa keaslian tanda tangan digital yang dibuat.
                    </p>
                    <p class="font-poppins text-size-20 text-regular text-center text-md-start text-color-scheme2">
                        Selain tanda tangan digital, kami juga berencana untuk memperluas pelayanan kami dengan beberapa
                        fitur yang akan segera dirilis.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="fitur">
        <div class="container py-5">
            <p class="text-center font-poppins text-size-40 text-color-scheme1 text-bold d-none d-md-block">Kenapa Pilih DigiSign</p>
            <p class="text-center font-poppins text-size-30 text-color-scheme1 text-bold d-md-none">Kenapa Pilih DigiSign</p>
            <p class="text-center font-poppins text-size-regular text-size-20 text-color-scheme2">DigiSign memastikan
                kualitas dan kenyamanan pengguna <br /> terhadap layanan yang ditawarkan</p>
            <div class="row mt-5">
                <div class="col-md-4 px-lg-5 d-flex align-items-stretch mt-5">
                    <div class="card rounded-5 p-lg-4">
                        <div class="card-body mb-5 h-auto">
                            <img class="card-title" src="{{ asset('assets/images/slash.png') }}" height="80px"
                                alt="slash" />
                            <p
                                class="card-subtitle mb-2 text-body-secondary font-poppins text-size-30 text-color-scheme10 text-bold">
                                Cepat & Praktis</p>
                            <p class="card-text font-poppins text-size-20 text-color-scheme2 text-regular">Buat tanda tangan
                                digital anda secara cepat dan praktis kapan saja dan dimana saja</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-lg-5 d-flex align-items-stretch mt-5">
                    <div class="card rounded-5 p-lg-4">
                        <div class="card-body mb-5 h-auto">
                            <img class="card-title" src="{{ asset('assets/images/shield.png') }}" height="80px"
                                alt="slash" />
                            <p
                                class="card-subtitle mb-2 text-body-secondary font-poppins text-size-30 text-color-scheme10 text-bold">
                                Aman</p>
                            <p class="card-text font-poppins text-size-20 text-color-scheme2 text-regular">Tanda tangan
                                digital anda dapat diverifikasi dan dibuktikan keasliannya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-lg-5 d-flex align-items-stretch mt-5">
                    <div class="card rounded-5 p-lg-4">
                        <div class="card-body mb-5 h-auto">
                            <img class="card-title" src="{{ asset('assets/images/faq.png') }}" height="80px"
                                alt="slash" />
                            <p
                                class="card-subtitle mb-2 text-body-secondary font-poppins text-size-30 text-color-scheme10 text-bold">
                                Dukungan Teknis</p>
                            <p class="card-text font-poppins text-size-20 text-color-scheme2 text-regular">Hubungi kami
                                kapan saja, kami selalu siap membantu anda dan menemukan solusi terbaik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 d-md-none">
                    <div class="container p-lg-5">
                        <img src="{{ asset('assets/images/contact_mascot.png') }}" class="img-fluid" alt="contact_mascot">
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="font-poppins text-bold text-size-50 text-color-scheme2 d-none d-md-block">Hubungi Kami</p>
                    <p class="font-poppins text-bold text-size-30 text-center text-color-scheme2 d-md-none">Hubungi Kami</p>
                    <p class="font-poppins text-regular text-size-20 text-center text-md-start text-color-scheme2">Kami selalu siap melayani anda</p>
                    <div class="container">
                        <div class="d-md-flex justify-content-md-start align-items-center mt-4">
                            <img src="{{ asset('assets/images/email_logo.svg') }}" class="img-fluid me-3"
                                alt="email_icon" />
                            <span
                                class="font-poppins text-size-20 text-regular text-color-scheme2 ">support.digisign@gmail.com</span>
                        </div>
                        <div class="d-md-flex justify-content-md-start align-items-center mt-4">
                            <img src="{{ asset('assets/images/phone_logo.svg') }}" class="img-fluid me-3"
                                alt="phonr_icon" />
                            <span class="font-poppins text-size-20 text-regular text-color-scheme2 ">087882123456789</span>
                        </div>
                        <div class="d-md-flex justify-content-md-start align-items-center mt-4">
                            <img src="{{ asset('assets/images/web_logo.svg') }}" class="img-fluid me-3" alt="web_icon" />
                            <span
                                class="font-poppins text-size-20 text-regular text-color-scheme2 ">www.digisignindonesia.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="container p-lg-5">
                        <img src="{{ asset('assets/images/contact_mascot.png') }}" class="img-fluid" alt="contact_mascot">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-color-scheme11 py-5" id="mulai">
        <div class="container my-5">
            <div class="row">   
                <div class="col-lg-3">
                    
                </div>
                <div class="col-lg-6 text-center">
                    <p class="font-poppins text-size-40 text-bold d-none d-md-block">Mulai Digitalisasi Tanda Tangan Anda</p>
                    <p class="font-poppins text-size-30 text-start text-bold d-md-none">Mulai Digitalisasi Tanda Tangan Anda</p>
                    <p class="font-poppins text-size-20 text-regular">Segera buat tanda tangan digital anda sekarang juga dan dapatkan kelebihan serta profesionalitas pada pekerjaan anda</p>
                    <x-button.primary type="button" href="#" class="mt-5">
                       <span class="font-poppins text-size-20 text-white text-medium"> Daftar Sekarang Juga</span>
                    </x-button.primary>
                </div>
                <div class="col-lg-3">
                    <img src="{{ asset('assets/images/letsgo_mascot.png') }}" class="img-fluid d-none d-lg-block" alt="letsgo_mascot"/>
                </div>
            </div>
        </div>
    </section>
@endsection
