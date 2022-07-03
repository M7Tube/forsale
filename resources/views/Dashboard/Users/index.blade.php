@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Users') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.users.index')
@endsection
