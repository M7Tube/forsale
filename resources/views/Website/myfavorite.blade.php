@extends('Website.layout')

@section('title', __('My Favorite'))

@section('head')
    <link href="{{ asset('css/adCard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/MyAdsPage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loadingIndicator.css') }}" rel="stylesheet">

@endsection

@section('body')
    @livewire('website.my-favorite')
@endsection
