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



    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner crouse">
            <div class="carousel-item active">
                <img src="{{asset('public/frontend/images/1775116066.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item crouse">
                <img src="{{asset('public/frontend/images/1775116054 (1).jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item crouse">
                <img src="{{asset('public/frontend/images/1775116066.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #f5f0e7;">

        <div class="container-fluid middle">
            <div class="row middle2">
                <div class="col-md-4 col-lg-4  ">
                    <h2>{{ $contact->yearsOfExcellence ?? "" }}+</h2>
                    <h6>Years of Excellence</h6>


                </div>
                <div class="col-md-4">
                    <h2>{{ $contact->groupsHosted ?? "" }}</h2>
                    <h6>Groups Hosted</h6>

                </div>
                <div class="col-md-4">
                         <h2>{{ $contact->guestsWelcomed ?? "" }}</h2>
                         <h6>Guests Welcomed</h6>

                </div>

            </div>

        </div>
        <div class="container" style="background-color: #f5f0e7; width: 100%; height: 70vh;">

            <h1>Why Guest Choose Us</h1>

            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('public/frontend/images/1775022266.png')}}" alt="" style="width: 70px;">
                    <p>Explore Hill Stations</p>
                    <p>Every property has their character, location, and charm making it your perfect choice.</p>


                </div>

                <div class="col-md-4">
                    <img src="{{asset('public/frontend/images/1775022107.png')}}" alt="" style="width: 70px;">
                    <p>Access to Exclusive villas</p>
                    <p>We hand-select properties based on their fit with the overall Hill Station portfolio making your
                        stay
                        hard to forget.</p>

                </div>

                <div class="col-md-4">
                    <img src="{{asset('public/frontend/images/1775022374.png')}}" alt="" style="width: 70px;">
                    <p>Standard Amenities</p>
                    <p>We make sure your stay is custom to what you like with our services.</p>

                </div>

            </div>

            <div class="row mt-5">
                <div class="col-md-4 ">
                    <img src="{{asset('public/frontend/images/1775022225.png')}}" alt="" style="width: 70px;">
                    <p>Quality Check</p>
                    <p>The right choice means the perfect staycation and what better than choosing the best for you.</p>


                </div>

                <div class="col-md-4">
                    <img src="{{asset('public/frontend/images/1775022329.png')}}" alt="" style="width: 70px;">
                    <p>Easy & Safe Bookings</p>
                    <p>We endeavor to make hassle free instant booking with secure payments.</p>

                </div>


            </div>

        </div>



        <!-- <div class="container-fluid  "> -->




        <div class="container-fluid national">
            <div style="display: flex; justify-content: space-between;">

                <h1>Find a Villa</h1>

                <p style=" color: white;">All Villas<i class="bi bi-chevron-right"></i></p>
            </div>
            <div class="row national-1 ">
                <div class="col-md-4">

                    <div class="card correct">
                        <img src="{{asset('public/frontend/images/5K5B0005 (1).jpg')}}" alt=""
                            style="width: 100%; height: 300px;">

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
                        <img src="{{asset('public/frontend/images/7916-Magnum-Villa-15.JPG')}}" alt=""
                            style="width: 100%; height: 300px;">

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
                        <img src="{{asset('public/frontend/images/WhatsApp Image 2024-06-25 at 9.06.08 AM (6).jpeg')}}"
                            alt="" style="width: 100%; height: 300px;">


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


    <!-- <div class="container-fluid "> -->

    <div class="container creater">


        <div class="row national-1 ">
            <div style="display: flex; justify-content: space-between;">
                <h1>From the journal</h1>
                <p>Read All Stories <i class="bi bi-chevron-right"></i></p>
            </div>
            <div class="col-md-4">

                <div class="card correct">
                    <img src="{{asset('public/frontend/images/17500825771.png')}}" alt=""
                        style="width: 100%; height: 320px;">

                    <div class="card-body reson-1 text-center">


                        <h3>Discover Panchgani &</h3>

                        <h3>Mahabaleshwar: The Ultimate...</h3>
                        <h6>16 june 2025</h6>


                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card correct">
                    <img src="{{asset('public/frontend/images/17482376201.jpg')}}" alt=""
                        style="width: 100%; height: 320px;">

                    <div class="card-body reson-1 text-center">


                        <h3>Must-Visit Attraction in</h3>
                        <h3>PANCHGANI</h3>
                        <h6>16 june 2025</h6>


                    </div>


                </div>
            </div>
            <div class="col-md-4">

                <div class="card correct">
                    <img src="{{asset('public/frontend/images/17500825771.png')}}" alt=""
                        style="width: 100%; height: 320px;">


                    <div class="card-body reson-1 text-center">


                        <h3>Discover Panchgani &</h3>

                        <h3>Mahabaleshwar: The Ultimate...</h3>
                        <h6>16 june 2025</h6>


                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- </div> -->


    <div class="container-fluid mb-5 middle1">
        <div class="row middlee">
            <div class="col-md-7 col-12">
                <h1>Straight from our guests</h1>
                <p> Very clean properties. And website services are also very good</p>

                <h5>Bharat J.</h5>
                <div style="color: gold; text-align: center;">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </div>


            </div>
            <div class="col-md-5">
                <h4>Leave a Review</h4>
                <div style="color: gold; text-align: center; font-size: 30px;">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </div>
                <form action="{{ route('create.index') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label" style="color: #E8DFC8;">Enter Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput"
                            placeholder="Name *" style="background-color: #f5f0e7;">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror

                        </span>

                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"
                            style="color: #E8DFC8;">Comment</label>
                        <textarea class="form-control" rows="3" name="comment"></textarea>
                        <span class="text-danger">
                            @error('comment')
                                {{ $message }}
                            @enderror

                        </span>
                    </div>

                    <button type="sumbit" class="btn btn-lg"
                        style="background-color: #3D5A6C; color: #E8DFC8; width: 35%; padding: 15px; margin-top: 30px; margin-left: 210px; font-size: 16px;">Send
                        Message</button>
                </form>


            </div>


        </div>

    </div>

    <div class="container accordion">
        <div class="row">
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is StayStoria?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                StayStoria is a premium villa and bungalow rental platform offering curated, private
                                stays across some of Maharashtra's most scenic destinations — including Panchgani,
                                Mahabaleshwar, Lonavala, Alibaug, and Goa. With over 11 years of hospitality experience
                                (formerly known as FionaStays), we specialise in handpicked properties that offer
                                privacy, comfort, and a personalised experience.


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What kind of properties does StayStoria offer?

                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                We offer private villas and bungalows across Panchgani, Mahabaleshwar, Lonavala,
                                Alibaug, and Goa. Every property is individually curated — each one comes with a private
                                pool, an on-site caretaker, BBQ facilities, and food availability. Pet-friendly options
                                and specific amenities vary by property, so we recommend confirming at the time of
                                booking.


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How do I book a villa or bungalow with StayStoria?

                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                Booking is simple and personal. Reach out to us directly on WhatsApp or give us a call.
                                Share your preferred dates, location, and group size — and our team will recommend the
                                best-suited property and confirm availability. Contact us at bookings@staystoria.com or
                                via WhatsApp.


                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                How far in advance should I book?

                            </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse show" aria-labelledby="headingfour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                We recommend booking at least 2-4 weeks in advance, especially for weekends, long
                                weekends, and peak holiday seasons. Properties in Panchgani and Mahabaleshwar tend to
                                fill up quickly during monsoon and winter months. Early booking ensures the best
                                availability and rates.


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapsefive">
                                What is the starting price for a StayStoria villa?

                            </button>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                Pricing starts from ₹10,000 per night and varies based on the property, number of
                                guests, and dates. Weekend stays, long weekends, and holiday seasons are priced higher.
                                Please contact us for an accurate quote for your specific dates and group size.


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How much advance payment is required to confirm a booking?

                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                A 60% advance payment of the total booking amount is required to confirm your
                                reservation. The remaining balance is payable before or at check-in. Booking
                                confirmation and a receipt are sent to you via email.


                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What payment methods are accepted?

                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                We accept bank transfers and UPI payments. Details will be shared at the time of booking
                                confirmation. All payments are acknowledged via email.


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Is early check-in or late check-out possible?

                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                Early check-in or late check-out may be accommodated based on availability and prior
                                arrangement. Please inform us at the time of booking and we will do our best to make it
                                convenient for you.


                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How long has StayStoria been in the hospitality business?

                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>

                                    StayStoria has been operating for over 11 years under the brand FionaStays. We
                                    rebranded to StayStoria to better reflect our vision: that every stay should
                                    have a story worth remembering.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Where are StayStoria properties located?

                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>

                                    Our primary locations are Panchgani and Mahabaleshwar in the Sahyadri hills. We
                                    also have select properties in Lonavala, Alibaug, and Goa. All our destinations
                                    are easily accessible for weekend getaways from Mumbai and Pune.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can I book a StayStoria villa online?

                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                Currently, bookings are confirmed through direct WhatsApp or phone communication.
                                This allows us to understand your requirements and recommend the right property
                                personally. Once confirmed, you will receive an official booking confirmation via
                                email.


                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapsefour">
                                Do you accommodate last-minute bookings?

                            </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse show" aria-labelledby="headingfour1"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>

                                    We try our best to accommodate last-minute requests, subject to availability.
                                    WhatsApp or call us directly and we'll confirm if your preferred property is
                                    open.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How is pricing calculated?

                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>

                                    Our pricing depends on three factors: the specific property, the number of
                                    guests, and your travel dates. Weekends and public holidays carry a premium. We
                                    recommend sharing your exact requirements so we can give you a transparent,
                                    no-surprise quote.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Is there a security deposit?

                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>

                                    Yes, a refundable security deposit of ₹5,000 to ₹10,000 is collected at the time
                                    of booking or check-in, depending on the property. This amount is fully refunded
                                    at check-out, provided no damages have occurred during the stay.

                                </p>

                            </div>
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
                    <a href="{{ $contact->facebook ?? "" }}"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $contact->instagram ?? "" }}"><i class="bi bi-instagram"></i></a>
                    <a href="{{ $contact->whatsapp ?? "" }}"><i class="bi bi-whatsapp"></i></a>
                </div>
                <hr style="border: 1px solid black;">
               <p style="font-size: 10px;">{{ $contact->copyright ?? "" }}</p>


            </div>

        </div>


    </div>
    </div>

</body>

</html>