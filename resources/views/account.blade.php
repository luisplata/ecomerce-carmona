@extends('template.layout')
@section('title', 'Cuenta')
@section('style')
@endsection
@section('content')
    @component('components.account.form',[
        'user'=>$user,
        'country'=>$country,
        'states'=>$states,
        'cities'=>$cities,
        'address'=>$address
    ])
    @endcomponent
@endsection
@section('script')
@endsection
