<a {{ $attributes->merge(['class'=> 'btn border border-0 rounded-4 bg-color-scheme9 text-white px-4 py-2 btn-primary-hover '])}} type="{{$type}}" href="{{$href}}">
    {{$slot}}
</a>