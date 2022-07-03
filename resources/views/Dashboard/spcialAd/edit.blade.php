@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Edit Spcial Ad') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.spcial-ad.edit')
@endsection
