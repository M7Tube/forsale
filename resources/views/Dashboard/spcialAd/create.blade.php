@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Create New Spcial Ads') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.spcial-ad.create')
@endsection
