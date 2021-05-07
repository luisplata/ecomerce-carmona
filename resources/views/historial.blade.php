@extends('template.layout')
@section('title', 'Historial')
@section('style')
@endsection
@section('content')
    @component('components.account.historial',[
        'order'=>$order
    ])
    @endcomponent
@endsection
@section('script')
@endsection
