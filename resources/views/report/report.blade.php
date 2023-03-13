@extends('template.template')
@section('env')
    <div id="env" data-api-url="{{env('APP_ROUTE')}}"></div>
@endsection
@section('head')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection
@section('content')
    <h1 id="name_ticket"></h1>
    <x-forms.report/>
    <x-charts.date/>
    <x-tables.date/>
    <x-tables.data-ticket/>
@endsection