<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DigiSign</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom_style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" height="50px" class="me-2">
                <span class="font-poppins text-color-scheme2 text-size-30 text-bold">DigiSign</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <span class="mx-auto"></span>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link font-poppins text-size-20 text-medium text-color-scheme2" aria-current="page"
                            href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-poppins text-size-20 text-medium text-color-scheme2"
                            href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-poppins text-size-20 text-medium text-color-scheme2"
                            href="#fitur">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-poppins text-size-20 text-medium text-color-scheme2"
                            href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item mx-3">
                        <x-button.primary type="button" href="{{ route('login') }}">
                            <span class="font-poppins text-size-20 text-medium">Login</span>
                        </x-button.primary>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
