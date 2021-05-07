@extends('template.layout')
@section('title', 'Finalizar Compra')
@section('style')
@endsection
@section('content')
    @component('components.order.form',[
        'city'=>$city,
        'country'=>$country,
        'states'=>$states,
        'cities'=>$cities,
    ])
    @endcomponent
@endsection
@section('script')
@endsection
