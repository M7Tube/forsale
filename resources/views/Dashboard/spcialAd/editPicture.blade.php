@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Edit Spcial Ad Picture') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.spcial-ad.edit-picture')
@endsection
