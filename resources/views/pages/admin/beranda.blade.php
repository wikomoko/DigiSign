@extends('layout.dashboard.main')

@section('content')
    <div class="container mt-3">
        <p class="font-poppins text-size-30 text-color-scheme2 text-medium d-none d-md-block">Daftar Pelanggan</p>
        <p class="font-poppins text-size-24 text-color-scheme2 text-medium d-md-none">Daftar Pelanggan</p>
        <x-button.primary type="button" href="{{ route('buatttd') }}" class="mt-2">
            <span class="font-poppins text-size-20 text-medium">Buat Baru</span>
        </x-button.primary>
        <div class="mt-5">

            @if (Session::has('failed'))
                <div class="alert alert-danger">
                    <p>{{ Session::get('failed') }}</p>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif

            {{-- @foreach ($datas as $key => $data)
                <div
                    class="{{ $key % 2 == 0 ? 'bg-color-scheme7' : 'bg-color-scheme8' }} rounded-4 py-4 px-5 container mt-5">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <p class="font-poppins text-size-14 text-color-scheme2 text-regular">Tanggal</p>
                            <p class="font-poppins text-size-14 text-color-scheme2 text-bold">{{ $data->created_at }}</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p class="font-poppins text-size-14 text-color-scheme2 text-regular">Status</p>
                            <p class="font-poppins text-size-14 text-color-scheme2 text-bold">{{ $data->status ? 'Aktif' : 'Suspend' }}</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p class="font-poppins text-size-14 text-color-scheme2 text-regular">Tujuan</p>
                            <p class="font-poppins text-size-14 text-color-scheme2 text-bold text-truncate">
                                {{ $data->message }}
                            </p>
                        </div>
                        <div class="col-md-3 text-end">
                            @if ($data->status)
                            <x-button.secondary type="button" href="{{ route('lihatttd', ['id'=>$data->id]) }}" class="mt-2">
                                <span class="font-poppins text-size-20 text-medium">Lihat</span>
                            </x-button.secondary>
                            @else 
                            <x-button.forte type="button" href="{{ route('terblock') }}" class="mt-2 bg-color-scheme6">
                                <span class="font-poppins text-size-20 text-medium">Informasi</span>
                            </x-button.forte>
                            @endif
                           
                        </div>
                    </div>
                </div>
            @endforeach --}}

        </div>
    </div>
@endsection
