@extends('layouts.main')

@section('content')
@include('sections.intro')

<main id="main">

  @include('sections.speakers')

  @include('sections.sponsors')

  @include('sections.venues')

  @include('sections.gallery')



 {{-- @include('sections.faq')
  @include('sections.schedule')

  @include('sections.subscribe')

{{--  @include('sections.buy_ticket')--}}

  {{-- @include('sections.contact') --}}
@endsection
