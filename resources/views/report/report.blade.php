@extends('template.template')
@section('env')
    <div id="env" data-api-url="{{env('APP_ROUTE')}}"></div>
@endsection
@section('head')
    <x-forms.report/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection