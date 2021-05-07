@extends('template.layout')
@section('title', 'Producto')
@section('style')
@endsection
@section('content')
    @component('components.product.description',[
        'product'=>$product,
    ])
    @endcomponent
    @component('components.product.related',[
        'related'=>$related
    ])
    @endcomponent
@endsection
@section('script')
@endsection
