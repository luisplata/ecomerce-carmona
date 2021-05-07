@extends('template.layout')
@section('title', 'Terminos y Condiciones')
@section('style')
@endsection
@section('content')
    @component('components.terms.info',[
        'webInfo'=>$webInfo,
    ])
    @endcomponent
@endsection
@section('script')
@endsection
