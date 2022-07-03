@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Spcial Ads') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.spcial-ad.index')
@endsection
