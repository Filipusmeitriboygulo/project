<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    {{-- Font   --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@700;900&family=Lato:ital,wght@0,400;1,700;1,900&display=swap" rel="stylesheet"> 

    {{-- icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css') }}">

    <title>CS_Outlet88s</title>
    
</head>
<body>
  <header>
    {{-- navbar --}}
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg fixed-top ">
          <div class="container">
            <a class="navbar-brand" href="#">CS_Outlet88</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  d-flex justify-content-end line align-item-center me-5" id="navbarSupportedContent">
              <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link me-4 active"  h ref="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4 active"  href="#">Promo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4 active"  href="#">Shop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4 active"  href="#">About Us</a>
                </li>
                <form class="d-flex mx-3" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <div class="icons-search mt-4 mt-lg-0">
                  <i class="bi bi-search" style="font-size :30px"></i>
                </div>
                <div class="icons-cart mx-5 mt-4 mt-lg-0">
                  <a href="#"><i class="bi bi-bag-dash " style="font-size :30px"></i></a>
                </div>
                <div class="btn-login mx-3">
                  <a href="#" class="btn border-dark border-3">Login</a>
                </div>
                <div class="btn-signup mx-2">
                  <a href="#" class="btn border-dark border-3">Sign UP</a>
                </div>
              </ul>
              
              
            </div>
          </div>
        </nav>
      </div>
    </div>
    

  </header>
      {{-- Container --}}

      <div class="home">
        <!-- Content here -->
        <div class="row">
          <div class="col lg-6 d-flex flex-column justifiy-content-end">
            <h1 class="heading">Temukan Fashion Yang Paling Cocok Denganmu</h1>
            <p class="subheading py-3 mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Laboriosam a cupiditate, hic repellendus rem beatae quisquam corrupti repudiandae aliquam sint?</p>
            <div class="btn-home">
              <a href="#" class="btn btn-shop btn-brown text-white border border-3">SHOP NOW</a>
            </div>
          </div>
          
          <div class="col lg-6 ms-5 py-lg-0">
            <div class="card ms-5" style="width: 25rem;">
               <img src="{{ asset('asset/img/kaos2-removebg-preview.png') }}" alt="" height="400px" width="400px" class="img-fluid" style="border:'none'">
            </div>
          </div>
        </div>
        
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>