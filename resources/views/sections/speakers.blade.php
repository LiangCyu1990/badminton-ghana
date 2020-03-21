<section id="speakers" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>DISCOVER BADMINTON</h2>
      <p></p>
    </div>
    @foreach($speakers as $speaker)
    <div class="row">
                <div class="col-sm-12 bad-discover">
                  <div >
                    <a href="{{route('school.index')}}" target="_blank">
                      <img src="{{ $speaker->photo->getUrl() }}" alt="Lights" style="width:100%; height=70%;">
                      <div class="caption">
                        <p>DISCOVER BADMINTON</p>
                      </div>
                    </a>
                  </div>
                </div>
    </div><br><br>

    {{-- <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="{{ $speaker->photo->getUrl() }}" alt="{{ $speaker->name }}" class="img-fluid">
            <div class="details">
              <h3><a href="{{ route('speaker', $speaker->id) }}">{{ $speaker->name }}</a></h3>
              <p>{{ $speaker->description }}</p>
              <div class="social">
                @if($speaker->twitter)
                  <a href="{{ $speaker->twitter }}"><i class="fa fa-twitter"></i></a>
                @endif
                @if($speaker->facebook)
                  <a href="{{ $speaker->facebook }}"><i class="fa fa-facebook"></i></a>
                @endif
                @if($speaker->linkedin)
                  <a href="{{ $speaker->linkedin }}"><i class="fa fa-linkedin"></i></a>
                @endif
              </div>
            </div>
          </div>
        </div> --}}
      @endforeach
    </div>
  </div>

</section>
