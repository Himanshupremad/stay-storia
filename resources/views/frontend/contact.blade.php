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
                    <h2>Contact</h2>
                </div>
            </div>
            <div class="col-md-4 aboutt">
                <p><span style="color: #3D5A6C;">Home</span> / Contact</p>



            </div>



        </div>


    </div>

    <div class="container-fluid" style="background-color: #f5f0e7;">
        <div class="container">
            @session('success')
                <div class="alert alert-success">
                    {{ $value }}
                </div>
            @endsession

            @session('error')
                <div class="text-danger">
                    {{ $value }}
                </div>
            @endsession

            <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row py-5">
                    <div class="col-md-7 py-5"
                        style="background-color: #3D5A6C; color: #fff; height: 70vh; border-radius: 20px;">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="Name" class="form-control" name="name">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror

                                </span>

                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" name="email">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror

                                </span>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Subject">
                                <span class="text-danger">
                                    @error('address')
                                        {{ $message }}
                                    @enderror

                                </span>
                            </div>

                        </div>

                        <div class="form-floating mt-5">
                       
                            <textarea class="form-control"  name="comment"
                                style="height: 130px"></textarea>
                            <span class="text-danger">
                                @error('comment')
                                    {{ $message }}
                                @enderror

                            </span>
                        </div>


                        <button type="sumbit" class="btn btn-lg"
                            style="background-color: #85cffb; color: #fff; font-weight: 500; width: 32%; padding: 17px; margin-top: 30px;  font-size: 16px; border-radius: 20px;">Send
                            Message</button>
            </form>

        </div>

        <div class="col-md-5">
            <div class="card" style="width: 35rem; height: 70vh; background-color: aliceblue; border: none;">
                <div class="card-body pt-5">
                    <p style="font-size: 16px;">📞 Contact Us</p>

                    <h6> We'd love to hear from you!</h6>

                    <p>
                        Whether you have a question, feedback, or just want to say hello, feel free to reach out to
                        us. We're here to help and typically respond within 24 hours.
                    </p>
                    <p><i class="bi bi-phone"></i>{{ $contact->number ?? "" }}</p>


                    <p> <i class="bi bi-envelope"></i>{{ $contact->email ?? "" }}</p>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>


    <footer style="background-color: #192d32;">
        <div class="container">
            <div class="row">

                <div class="col-md-4 footer-1">
                    <img src="{{asset('public/frontend/images/logo (1).png')}}" alt="" style="width: 53%;">

                    <p>Every stay has a story</p>
                    <p>Phone : 8830534803/ 6363361010</p>
                    <p>Email : staystoria@gmail.com</p>
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