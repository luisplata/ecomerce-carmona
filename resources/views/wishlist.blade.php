@extends('template.layout')
@section('title', 'Wishlist')
@section('style')
@endsection
@section('content')
    @component('components.account.wishlist',[
        'wishes'=>$wishes
    ])
    @endcomponent
@endsection
@section('script')
@endsection
