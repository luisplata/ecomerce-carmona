@extends('template.layout')
@section('title', 'Vende tu arte')
@section('style')
@endsection
@section('content')
    @component('components.sell.banner',[
        'webInfo'=>$webInfo
    ])
    @endcomponent
    @component('components.sell.steps',[
        'webInfo'=>$webInfo
    ])
    @endcomponent
@endsection
@section('script')
@endsection
