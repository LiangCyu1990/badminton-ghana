@extends('layouts.main')

@section('content')
<main id="main" class="main-page">
  <section id="speakers-details" class="wow fadeIn">
    <div class="container">
      <div class="section-header">
        <h2>Speaker Details</h2>
        <p>Praesentium ut qui possimus sapiente nulla.</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          {{-- <img src="{{ $school->photo->getUrl() }}" alt="{{ $school->name }}" class="img-fluid"> --}}
        </div>

        <div class="col-md-6">
          <div class="details">
            {{-- <h2>{{ $school->name }}</h2> --}}
            <div class="social">

            </div>
            {{-- <p>{{ $school->full_description }}</p> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
