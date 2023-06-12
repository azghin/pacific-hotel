<header class="site-header js-site-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="/"><span class="text-primary ">Pacific</span> Hotel</a></div>
        <div class="col-6 col-lg-8">


          <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- END menu-toggle -->

          <div class="site-navbar js-site-navbar">
            <nav role="navigation">
              <div class="container">
                <div class="row full-height align-items-center">
                  <div class="col-md-6 mx-auto">
                    <ul class="list-unstyled menu">
                      <li class=".nav_link active"><a href="{{ Route('home') }}">Home</a></li>
                      <li class=".nav_link "><a href="{{ Route('client.rooms') }}">Rooms</a></li>
                      <li class=".nav_link "><a href="{{ Route('client.about') }}">About</a></li>
                      <li class=".nav_link "><a href="{{ Route('client.contact') }}">Contact</a></li>
                      <li class=".nav_link "><a href="{{ Route('client.reservation') }}">Reservation</a></li>
                      @guest
                      <li><a href="{{ Route('login') }}">Login</a></li>
                      @endguest
                      @auth
                      <li><a href="{{ Route('logout') }}">logout</a></li>
                      @endauth
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="site-hero overlay" style="background-image: url(../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade-up">
          <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <i class="fa fa-sharp fa-solid fa-star" style="color: #ffe224;"></i>  Hotel</span>
          <h1 class="heading">A Best Place To Stay</h1>
        </div>
      </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
      <div class="mouse-icon">
        <span class="mouse-wheel"></span>
      </div>
    </a>
  </section>

  <script>
    const linkColor = document.querySelectorAll('.nav_link')
        
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
  </script>
