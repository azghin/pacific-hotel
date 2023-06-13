<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    @yield('resource')

    <!-- datatable -->

    @yield('datatable')

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <title>Admin</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
        :root{--header-height: 3rem;--nav-width: 68px;--first-color: #4723D9;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100;scroll-behavior: smooth;}*,
        ::before,::after{box-sizing: border-box}
        body{
            font-family: "Open Sans", sans-serif;
            background: #f6f9ff;
            color: #444444;
            position: relative;
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s
        }
        
        

        body {
            font-family: "Open Sans", sans-serif;
            background: #f6f9ff;
            color: #444444;
        }

        a {
            color: #4154f1;
            text-decoration: none;
        }

        a:hover {
            color: #717ff5;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
        font-family: "Nunito", sans-serif;
        }

        #main {
            margin-top: 60px;
            padding: 20px 30px;
            transition: all 0.3s;
            }

            @media (max-width: 1199px) {
            #main {
                padding: 20px;
            }
        }
        a{text-decoration: none}
        .header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}
        .header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}
        .header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}
        .header_img img{width: 40px}
        .l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}
        .nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}
        .nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}
        .nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}
        .nav_logo-name{color: var(--white-color);font-weight: 700}
        .nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}
        .nav_link:hover{color: var(--white-color)}
        .nav_icon{font-size: 1.25rem}.show{left: 0}
        .body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}
        .active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}
        .height-100{height:100vh}
        @media screen and (min-width: 768px){
            body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}
            .header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}
            .header_img{width: 40px;height: 40px}
            .header_img img{width: 45px}
            .l-navbar{left: 0;padding: 1rem 1rem 0 0}
            .show{width: calc(var(--nav-width) + 156px)}
            .body-pd{padding-left: calc(var(--nav-width) + 188px)}
        }
        #main .show{
                width: 100%;
            }
        
        .breadcrumb {
            font-size: 20px;
            font-family: "Nunito", sans-serif;
            color: #899bbd;
            font-weight: 600;
        }

        .breadcrumb a {
        color: #899bbd;
        transition: 0.3s;
        }

        .breadcrumb a:hover {
        color: #51678f;
        }

        .breadcrumb .breadcrumb-item::before {
        color: #899bbd;
        }

        .breadcrumb .active {
        color: #51678f;
        font-weight: 600;
        }


        .dashboard .filter {
  position: absolute;
  right: 0px;
  top: 15px;
}

.dashboard .filter .icon {
  color: #aab7cf;
  padding-right: 20px;
  padding-bottom: 5px;
  transition: 0.3s;
  font-size: 16px;
}

.dashboard .filter .icon:hover,
.dashboard .filter .icon:focus {
  color: #4154f1;
}

.dashboard .filter .dropdown-header {
  padding: 8px 15px;
}

.dashboard .filter .dropdown-header h6 {
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 1px;
  color: #aab7cf;
  margin-bottom: 0;
  padding: 0;
}

.dashboard .filter .dropdown-item {
  padding: 8px 15px;
}

/* Info Cards */
.dashboard .info-card {
  padding-bottom: 10px;
}

.dashboard .info-card h6 {
  font-size: 28px;
  color: #012970;
  font-weight: 700;
  margin: 0;
  padding: 0;
}

.dashboard .card-icon {
  font-size: 32px;
  line-height: 0;
  width: 64px;
  height: 64px;
  flex-shrink: 0;
  flex-grow: 0;
}

.dashboard .sales-card .card-icon {
  color: #4154f1;
  background: #f6f6fe;
}

.dashboard .revenue-card .card-icon {
  color: #2eca6a;
  background: #e0f8e9;
}

.dashboard .customers-card .card-icon {
  color: #ff771d;
  background: #ffecdf;
}


.profile .profile-card img {
  max-width: 120px;
}

.profile .profile-card h2 {
  font-size: 24px;
  font-weight: 700;
  color: #2c384e;
  margin: 10px 0 0 0;
}

.profile .profile-card h3 {
  font-size: 18px;
}

.profile .profile-card .social-links a {
  font-size: 20px;
  display: inline-block;
  color: rgba(1, 41, 112, 0.5);
  line-height: 0;
  margin-right: 10px;
  transition: 0.3s;
}

.profile .profile-card .social-links a:hover {
  color: #012970;
}

.profile .profile-overview .row {
  margin-bottom: 20px;
  font-size: 15px;
}

.profile .profile-overview .card-title {
  color: #012970;
}

.profile .profile-overview .label {
  font-weight: 600;
  color: rgba(1, 41, 112, 0.6);
}

.profile .profile-edit label {
  font-weight: 600;
  color: rgba(1, 41, 112, 0.6);
}

.profile .profile-edit img {
  max-width: 120px;
}

    </style>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div><a href=""><h2>Pacific <span class="text-dark">Hotel</span></h2></a></div>
        <div class="pe-3" style="width: 50px; ">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">PACIFIC HOTEL</span> </a>
                <div class="nav_list"> 
                    <a href="{{ Route('admin.dashboard') }}" class="nav_link "> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                    <a href="{{ Route('admin.rooms') }}" class="nav_link"> <i class='bi bi-building nav_icon'></i> <span class="nav_name">Rooms</span> </a> 
                    <a href="{{ Route('admin.newroom') }}" class="nav_link"> <i class='bi bi-building-add nav_icon'></i> <span class="nav_name">New Room</span> </a> 
                    <a href="{{Route('admin.reservation')}}" class="nav_link"> <i class='bi bi-card-checklist nav_icon'></i> <span class="nav_name">Reservations</span> </a> 
                    <a href="{{Route('admin.review')}}" class="nav_link"> <i class='bi bi-layout-text-sidebar-reverse nav_icon'></i> <span class="nav_name">reviews</span> </a> 
                    <a href="{{ Route('admin.users') }}" class="nav_link "> <i class='bi bi-people-fill nav_icon'></i> <span class="nav_name">Users</span> </a> 
                    <a href="{{ Route('admin.profil') }}" class="nav_link"> <i class='bi bi-person-fill nav_icon'></i> <span class="nav_name">Profil</span> </a> 
                </div>
            </div> <a href="{{ Route('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <main id="main" class="main">
      <div class="height-100 bg-light">
        <h4>Main content</h4>
        @yield('content')
      </div>
    </main>
    <!--Container Main end-->




    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) =>{
        const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)
        
        // Validate that all variables exist
        if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
        // show navbar
        nav.classList.toggle('show')
        // change icon
        toggle.classList.toggle('bx-x')
        // add padding to body
        bodypd.classList.toggle('body-pd')
        // add padding to header
        headerpd.classList.toggle('body-pd')
        })
        }
        }
        
        showNavbar('header-toggle','nav-bar','body-pd','header')
        
        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')
        
        function colorLink(){
        if(linkColor){
        linkColor.forEach(l=> l.classList.remove('active'))
        this.classList.add('active')
        }
        }
        linkColor.forEach(l=> l.addEventListener('click', colorLink))
        
            // Your code to run since DOM is loaded and ready
        });
    </script>

    @yield('script')
</body>
</html>