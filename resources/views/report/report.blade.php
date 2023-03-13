@extends('template.template')
@section('env')
    <div id="env" data-api-url="{{env('APP_ROUTE')}}"></div>
@endsection
@section('head')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection
@section('content')
    <x-forms.report/>
    <x-charts.date/>
    <x-tables.date/>
@endsection