@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Continent Of Origin') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.continent-of-origin.index')
@endsection
