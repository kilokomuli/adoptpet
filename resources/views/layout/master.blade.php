<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/style.css"/>
    <script src="https://kit.fontawesome.com/512fd72963.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container-fluid cont ">
        <section class="topnav">
            
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold fs-2 text-primary" href="/">PetsInNeed</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  d-flex align-items-end ms-auto mb-1 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-primary" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                             <a class="nav-link text-primary" href="/whatwedo">What We do</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-primary" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="/services">Services</a>
    
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item text-primary" href="/adoptpet">Adopt a pet</a></li>
                                    <li><a class="dropdown-item text-primary" href="/foster">Foster a pet</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                             <a class="nav-link text-primary" href="/animalcare">Animal Care</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-primary" href="/contactus">Contact us</a>
                            </li>
                            
                        </ul>
                        <ul class="nav navbar-nav ml-auto border border-start-dark">
                            <li class="nav-item">
                                <a class="nav-link text-primary" href="/signup"><!--<span class="fas fa-user"></span>--> Sign Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-primary" href="/login"><!--<span class="fas fa-sign-in-alt"></span>--> Login</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>

        </section>
        <!--footer-->
        <footer>
            
        </footer>

    </div>
    @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>