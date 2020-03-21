@extends('layouts.main')

@section('content')
<main id="main" class="main-page">

<section id="speakers-details" class="wow fadeIn">
 <div class="container">

 <div class="container">
    <div class="title-container title-theme">
        <h1 style="color: #ffffee;">DISCOVER BADMINTON</h1>
      </div>
    <div class="bad-discover">
      <div class="w3-row-padding w3-margin-top">
      @foreach($schools as $school)
        <div class="w3-third">
          <div class="w3-card">
            <img src="img_5terre.jpg" style="width:100%">
            <div class="w3-container">
              <h5>{{$school->photo}}</h5>
            </div>
          </div>
        </div>
      @endforeach

  </section>
</main>
@endsection
