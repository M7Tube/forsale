@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Motion Vector') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.motion-vector.index')
@endsection
