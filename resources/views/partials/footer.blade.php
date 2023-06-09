<footer class="section footer-section">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-3 mb-5">
          <ul class="list-unstyled link">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
           <li><a href="#">Rooms</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-5">
          <ul class="list-unstyled link">
            <li><a href="#">The Rooms &amp; Suites</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Restaurant</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-5 pr-md-5 contact-info">
          <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
          @foreach($hotels as $hotel)
          <p><span class="d-block"><i class="fa-sharp fa-solid fa-location-dot fa-lg" style="color: #d9b70d;"></i>  Address:</span> <span> {{ $hotel->address }} <br> {{ $hotel->country }}</span></p>
          <p><span class="d-block"><i class="fa-sharp fa-solid fa-phone fa-lg" style="color: #d9b70d;"></i>  Phone:</span> <span> (+212) {{ $hotel->phone }}</span></p>
          <p><span class="d-block"><i class="fa-sharp fa-solid fa-envelope fa-lg" style="color: #d9b70d;"></i>  Email:</span> <span> {{ $hotel->email }}</span></p>
          @endforeach
        </div>
        <div class="col-md-3 mb-5">
          <p>Sign up for our newsletter</p>
          <form action="#" class="footer-newsletter">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email...">
              <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="row pt-5">
        <p class="col-md-6 text-left">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
          
        <p class="col-md-6 text-right social">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
        </p>
      </div>
    </div>
  </footer>