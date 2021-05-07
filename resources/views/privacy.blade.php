@extends('template.layout')
@section('title', 'Avisos de privacidad')
@section('style')
@endsection
@section('content')
    @component('components.privacy.info',[
        'webInfo'=>$webInfo,
    ])
    @endcomponent
@endsection
@section('script')
@endsection
