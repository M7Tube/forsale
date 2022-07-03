@extends('Website.layout')

@section('title', __('Add New Ad'))

@section('head')
@endsection

@section('body')
    <div style="margin-top: 100px"></div>
    @livewire('website.add-new-ad')
@endsection
