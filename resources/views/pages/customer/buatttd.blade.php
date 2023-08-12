@extends('layout.dashboard.main')

@section('content')
    <div class="container mt-3">
        <p class="font-poppins text-size-30 text-color-scheme2 text-medium d-none d-md-block">Tanda Tangan Baru</p>
        <p class="font-poppins text-size-24 text-color-scheme2 text-medium d-md-none">Tanda Tangan Baru</p>
        <div class="mt-2">
            <form method="POST" action="{{ route('saveTtd') }}">
                @csrf
                <div class="mb-3">
                    <textarea id="" cols="80" rows="10" class="form-control px-4"
                        id="text" placeholder="Isi Catatan" name="message" required></textarea>
                </div>
                <div>
                    <x-button.secondaryPost type="submit" class="mt-2">
                        <span class="font-poppins text-size-20 text-medium">Generate</span>
                    </x-button.secondaryPost>
                    <x-button.forte type="button" href="{{ route('beranda') }}" class="mt-2">
                        <span class="font-poppins text-size-20 text-medium">Batal</span>
                    </x-button.forte>
                </div>
            </form>
        </div>
    </div>
@endsection
