<button {{ $attributes->merge(['class'=> 'btn border border-0 rounded-pill bg-color-scheme1 text-white px-4 py-2 btn-primary-hover '])}} type="{{$type}}">
    {{$slot}}
</button>