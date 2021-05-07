@extends('template.layout')
@section('title', 'Como Comprar')
@section('style')
@endsection
@section('content')
    @component('components.howbuy.info',[
        'questions'=>$questions
    ])
    @endcomponent
@endsection
@section('script')
@endsection
