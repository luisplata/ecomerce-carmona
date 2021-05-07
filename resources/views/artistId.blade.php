@extends('template.layout')
@section('title', 'Artista')
@section('style')
@endsection
@section('content')
    @component('components.artist_info.banner',[
        'artist'=>$artist,
        'products'=>$products
    ])
    @endcomponent
    @component('components.artist_info.list',[
        'products'=>$products
    ])
    @endcomponent
@endsection
@section('script')
@endsection
