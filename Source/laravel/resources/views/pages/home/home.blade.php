@extends('shared._layout')
@section('_body_content')

    @include("modules.home.home-highlight")
    @include("modules.home.home-features")
    @include("modules.home.home-news")
    @include("modules.home.home-reviews")
    @include("modules.home.home-source")
    @include("modules.home.home-donation")

@stop