<section class="section contact-section" id="next">
    <div class="container">
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
          
          <form action="{{ Route('client.pdf') }}" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="name">Name</label>
                <input type="text" id="name" class="form-control " value="{{ $user->username }}">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="phone">Phone</label>
                <input type="text" id="phone" class="form-control ">
              </div>
            </div>
        
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="email">Email</label>
                <input type="email" id="email" class="form-control " value="{{ $user->email }}">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
                <input type="date" name="start_date"  class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
                <input type="date" name="end_date"  class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label for="adults" class="font-weight-bold text-black">Adults</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="adults" class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4+</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label for="children" class="font-weight-bold text-black">Children</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="children" class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4+</option>
                  </select>
                </div>
              </div>
            </div>

            

            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="message">Type rooms</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="room_type" id="room_type" class="form-control">
                    @foreach($rooms as $room)
                      <option value="{{ $room->id }}">{{ $room->type }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Reserve Now" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
              </div>
            </div>
          </form>

          

        </div>
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-md-10 ml-auto contact-info">
              @foreach($hotels as $hotel)
              <p><span class="d-block">Address:</span> <span class="text-black"> {{ $hotel->address }}  {{ $hotel->country }}</span></p>
              <p><span class="d-block">Phone:</span> <span class="text-black"> (+1) 435 3533</span></p>
              <p><span class="d-block">Email:</span> <span class="text-black"> info@yourdomain.com</span></p>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
