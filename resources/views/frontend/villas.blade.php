<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('public/frontend/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar head navbar-expand-md ">

        <div class="container header">



            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-dark"></span>
            </button>




            <img src="{{asset('public/frontend/images/logo (1).png')}}" alt="" class="ima-fluid"
                style="max-height: 40px;">

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">



                <ul class="navbar-nav lists  mb-2 mb-md-0 ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}"
                            style="color: whitesmoke;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('villas') }}">Villas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('journal') }}">Journal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contactus') }}">Contact us</a>
                    </li>


                </ul>



                <div class="ms-auto">
                    <p class="bg-light p-2" style="border-radius: 20px;">
                        <i class="bi bi-search"></i>
                    </p>

                </div>
            </div>

        </div>


    </nav>

    <div class="container-fluid about-us">
        <div class="row">
            <div class="col-md-8">
                <div class="aboutt">
                    <h2>ABOUT US</h2>
                </div>
            </div>
            <div class="col-md-4 aboutt">
                <p><span style="color: #3D5A6C;">Home</span> / About</p>



            </div>
            
            
            
        </div>
        
        
    </div>

     <!-- <div class="container-fluid  villas"> -->
<div class="villas">
        <div class="container py-3">
            <div class="row national-1 ">
                
                <div class="col-md-4">

                    <div class="card correct">
                        <img src="{{asset('public/frontend/images/5K5B0005 (1).jpg')}}" alt="" style="width: 100%; height: 300px;">

                        <div class="card-body reson">


                            <h3>GLAXY</h3>
                            <h6>PANCHGANI</h6>
                            <span class="price">Weekday Price | ₹15000</span>
                            <h6 style="color: #fff;">Expoler Villa<i class="bi bi-chevron-right"></i></h6
                                style="color: #fff;">


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card correct">
                        <img src="{{asset('public/frontend/images/7916-Magnum-Villa-15.JPG')}}" alt="" style="width: 100%; height: 300px;">

                        <div class="card-body reson">


                            <h3>IRSH VILLA</h3>
                            <h6>PANCHGANI</h6>
                            <span class="price">Weekday Price | ₹15000</span>
                            <h6 style="color: #fff;">Expoler Villa<i class="bi bi-chevron-right"></i></h6
                                style="color: #fff;">


                        </div>


                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card correct">
                        <img src="{{asset('public/frontend/images/WhatsApp Image 2024-06-25 at 9.06.08 AM (6).jpeg')}}" alt=""
                            style="width: 100%; height: 300px;">


                        <div class="card-body reson">

                            <h3>5 ELEMENTS VILLA</h3>
                            <h6>PANCHGANI</h6>
                            <span class="price">Weekday Price | ₹15000</span>
                            <h6 style="color: #fff;">Expoler Villa<i class="bi bi-chevron-right"></i></h6
                                style="color: #fff;">

                        </div>


                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->


     <!-- <div class="container-fluid  villas"> -->

        <div class="container py-3">
            <div class="row national-1 ">
                
                <div class="col-md-4">

                    <div class="card correct">
                        <img src="{{asset('public/frontend/images/5K5B0005 (1).jpg')}}" alt="" style="width: 100%; height: 300px;">

                        <div class="card-body reson">


                            <h3>GLAXY</h3>
                            <h6>PANCHGANI</h6>
                            <span class="price">Weekday Price | ₹15000</span>
                            <h6 style="color: #fff;">Expoler Villa<i class="bi bi-chevron-right"></i></h6
                                style="color: #fff;">


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card correct">
                        <img src="{{asset('public/frontend/images/7916-Magnum-Villa-15.JPG')}}" alt="" style="width: 100%; height: 300px;">

                        <div class="card-body reson">


                            <h3>IRSH VILLA</h3>
                            <h6>PANCHGANI</h6>
                            <span class="price">Weekday Price | ₹15000</span>
                            <h6 style="color: #fff;">Expoler Villa<i class="bi bi-chevron-right"></i></h6
                                style="color: #fff;">


                        </div>


                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card correct">
                        <img src="{{asset('public/frontend/images/WhatsApp Image 2024-06-25 at 9.06.08 AM (6).jpeg')}}" alt=""
                            style="width: 100%; height: 300px;">


                        <div class="card-body reson">

                            <h3>5 ELEMENTS VILLA</h3>
                            <h6>PANCHGANI</h6>
                            <span class="price">Weekday Price | ₹15000</span>
                            <h6 style="color: #fff;">Expoler Villa<i class="bi bi-chevron-right"></i></h6
                                style="color: #fff;">

                        </div>


                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->

     <!-- <div class="container-fluid  villas"> -->

        <div class="container py-3">
            <div class="row national-1 ">
                
                <div class="col-md-4 col-sm-12">

                    <div class="card correct">
                        <img src="{{asset('public/frontend/images/5K5B0005 (1).jpg')}}" alt="" style="width: 100%; height: 300px;">

                        <div class="card-body reson">


                            <h3>GLAXY</h3>
                            <h6>PANCHGANI</h6>
                            <span class="price">Weekday Price | ₹15000</span>
                            <h6 style="color: #fff;">Expoler Villa<i class="bi bi-chevron-right"></i></h6
                                style="color: #fff;">


                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card correct">
                        <img src="{{asset('public/frontend/images/WhatsApp Image 2024-07-14 at 10.03.54 PM (1).jpeg')}}" alt="" style="width: 100%; height: 300px;">

                        <div class="card-body reson">


                            <h3>IRSH VILLA</h3>
                            <h6>PANCHGANI</h6>
                            <span class="price">Weekday Price | ₹15000</span>
                            <h6 style="color: #fff;">Expoler Villa<i class="bi bi-chevron-right"></i></h6
                                style="color: #fff;">


                        </div>


                    </div>
                </div>
                <div class="col-md-4 col-sm-12">

                    <div class="card correct">
                        <img src="{{asset('public/frontend/images/IMG-20240530-WA0005.jpg')}}" alt=""
                            style="width: 100%; height: 300px;">


                        <div class="card-body reson">

                            <h3>5 ELEMENTS VILLA</h3>
                            <h6>PANCHGANI</h6>
                            <span class="price">Weekday Price | ₹15000</span>
                            <h6 style="color: #fff;">Expoler Villa<i class="bi bi-chevron-right"></i></h6
                                style="color: #fff;">

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#" style="background-color: black;">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>

 
    <footer style="background-color: #192d32;">
        <div class="container">
            <div class="row">

                <div class="col-md-4 footer-1">
                    <img src="{{asset('public/frontend/images/logo (1).png')}}" alt="" style="width: 53%;">

                    <p>Every stay has a story</p>
                    <p>Phone - 8830534803/ 6363361010</p>
                    <p>Email - staystoria@gmail.com</p>


                </div>


                <div class="col-md-4 footer-1">
                    <h2>Featured Villas</h2>
                    <p>
                        <i class="bi bi-chevron-right"></i> Lakeside Villa
                    </p>
                    <p>
                        <i class="bi bi-chevron-right"></i>Farm Villa
                    </p>
                    <p>
                        <i class="bi bi-chevron-right"></i>Zen Villa
                    </p>
                    <p>
                        <i class="bi bi-chevron-right"></i>Water Villa
                    </p>
                    <p>
                        <i class="bi bi-chevron-right"></i>Victoria Villa
                    </p>

                </div>

                <div class="col-md-4 footer-1">
                    <h2>Quick Links</h2>
                    <p>
                        <i class="bi bi-chevron-right"></i>Home
                    </p>
                    <p>
                        <i class="bi bi-chevron-right"></i>About
                    </p>
                    <p>
                        <i class="bi bi-chevron-right"></i>Villas
                    </p>
                    <p>
                        <i class="bi bi-chevron-right"></i>Journal
                    </p>
                    <p>
                        <i class="bi bi-chevron-right"></i>Contact us
                    </p>

                </div>



            </div>

        </div>
    </footer>
    <div class="container-fluid outer">
        <div class="row">
            <div class="col-md-12 text-center px-3">
                <div class="mt-2">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-whatsapp"></i>
                </div>
                <hr style="border: 1px solid black;">
                <p style="font-size: 10px;">© 2025 StayStoria. All rights reserved. Previously known as Fiona Stays.
                    Est. 2014.</p>


            </div>

        </div>


    </div>
    </div>

</body>

</html>