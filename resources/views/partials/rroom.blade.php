<section class="section">
    <div class="container">
      
      <div class="row">

      @isset($rooms)

      @foreach($rooms as $room)
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="../images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>{{ $room->type }}</h2>
              <span class="text-uppercase letter-spacing-1">{{ $room->price_per_night }}$ / per night</span>
            </div>
          </a>
        </div>
      @endforeach
      @endisset

      @empty($rooms)
      <h1>Pas de data</h1>
      @endempty

      

      </div>
    </div>
  </section>