@extends('layout.dashboard.main')

@section('content')
    <div class="container mt-3">
        <p class="font-poppins text-size-30 text-color-scheme2 text-medium d-none d-md-block">Tanda Tangan Saya</p>
        <p class="font-poppins text-size-24 text-color-scheme2 text-medium d-md-none">Tanda Tangan Saya</p>

        <div class="col-3" id="qrpad">

        </div>

        <div class="mt-5">
            <x-button.ternary type="button" href="#" onclick="downloadQR()">
                <span class="font-poppins text-size-20 text-medium text-color-scheme2">Cetak QR</span>
            </x-button.ternary>
        </div>

        <p class="font-poppins mt-5 text-size-24 text-color-scheme2 text-regular">Dibuat Pada</p>
        <p class="font-poppins  text-size-30 text-bold text-color-scheme2 text-medium d-none d-md-block">
            {{ $data->created_at }}
        </p> 
        <p class="font-poppins  text-size-24 text-bold text-color-scheme2 text-medium d-md-none">{{ $data->created_at }}</p>

        <p class="font-poppins mt-5 text-size-24 text-color-scheme2 text-regular">Catatan TTD</p>
        <div class="mb-3">
            <textarea name="" id="" cols="80" rows="10" class="form-control px-4" id="text">{{ $data->message }}</textarea>
        </div>

    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/js/qrcode.js') }}"></script>
    <script>
        new QRCode(document.getElementById("qrpad"), "{{ route('validasi', ['id'=>$data->id]) }}");
    </script>
    <script src="{{ asset('assets/js/dom-to-image.min.js') }}"></script>
    <script src="{{ asset('assets/js/FileSaver.min.js') }}"></script>
    <script>
        function downloadQR() {
            let img = document.getElementById('qrpad')
            domtoimage.toBlob(img)
                .then(function(blob) {
                    window.saveAs(blob, 'qr_code.png');
                });
        }
    </script>
@endpush
