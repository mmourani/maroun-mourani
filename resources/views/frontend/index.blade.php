<!--
author: Maroun Mourani
author URL: http://mouraniconsulting.com
-->
@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('banner')
    @include('frontend.includes.banner')
@endsection 

@section('content')
    @include('frontend.includes.about')
    @include('frontend.includes.skills')
    @include('frontend.includes.testimonials')
    @include('frontend.includes.education')
    @include('frontend.includes.work')
    @include('frontend.includes.contact')
@endsection

