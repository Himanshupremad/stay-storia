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

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@14.0.1/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }


        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #444;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color: #000;
            opacity: 1;
            background: rgba(0, 0, 0, 0.2);
        }

        .swiper-pagination-bullet-active {
            color: #fff;
            background: #007aff;
        }
    </style>
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


    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
                <div class="swiper-slide"><img src="{{asset('public/' . $banner->image)}}" alt=""></div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>

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
  <div class="container-fluid" style="background-color: #f5f0e7; padding: 60px 0;"> 
    <div class="container"> 
        <h1 class="text-center mb-5">Why Guests Choose Us</h1> 
        <div class="row g-4"> {{-- g-4 se boxes ke beech gap aayega --}}
            @foreach ($chooselists as $chooselist) 
                <div class="col-md-4 text-center"> {{-- text-center se sab kuch beech me align ho jayega --}}
                    <div class="p-3">
                        <img src="{{ asset('public/' . $chooselist->image) }}" alt="{{ $chooselist->title }}" style="width: 70px; height: auto;" class="mb-3"> 
                        <h3 class="h5 fw-bold">{{ $chooselist->title }}</h3> 
                        <p class="text-muted">{{ $chooselist->description }}</p> 
                    </div>
                </div> 
            @endforeach 
        </div> 
    </div> 
</div>


    <div class="container-fluid " style="background-color: #192d32; color: #E8DFC8;"> 
    <div style="display: flex; justify-content: space-between;"> 
        <h1>Find a Villa</h1> 
        <p style="color: white;">All Villas<i class="bi bi-chevron-right"></i></p> 
    </div> 
    
    <div class="row"> 
     
        @foreach ($villas as $villa) 
            <div class="col-md-4 d-flex mb-4"> 
                <div class="card correct" style="width: 100%;"> 
                    <img src="{{asset('public/'.$villa->image)}}" alt="" style="width: 100%; height: 300px; object-fit: cover;"> 
                    <div class="card-body reson"> 
                        <h3>{{ $villa->name }}</h3> 
                        <h6>{{ $villa->city }}</h6> 
                        <span class="price">{{ $villa->price }}</span> 
                        
                        <h6 style="color: #fff;">{{ $villa->Expoler }}<i class="bi bi-chevron-right"></i></h6> 
                    </div> 
                </div> 
            </div> 
        @endforeach 
    </div> 
</div>

   



   

    <div class="container-fulid creater ">


        <div style="display: flex; justify-content: space-between;">
            <h1>From the journal</h1>
            <p>Read All Stories <i class="bi bi-chevron-right"></i></p>
        </div>
        <div class="row national-1 ">
          @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="card correct">
                    <img src="{{ asset('public/'. $blog->image) }}" alt="" style="width: 100%; height: 320px; object-fit: cover;">
                    <div class="card-body reson-1 text-center">
                        <h3>{{ $blog->name }}</h3>
                        <h3>{{ $blog->city }}</h3>
                        <h6>{{ $blog->date }}</h6>
                    </div>
                </div>
            </div>
          
          @endforeach
          
        </div>
    </div>
  


    <div class="container-fluid  middle1">
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

    <div class="container-fulid accordion">
        <div class=" container ">
            <h1 style="color: #000; font-weight: 500; font-size: 43px; padding-top: 100px;">FAQs</h1>
            <div class="row mt-5">
                <div class="col-md-6 " >
                    <div class="accordion" id="accordionExample" >
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  style="background-color: #E8DFC8">
                                    What is StayStoria?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample" >
                                <div class="accordion-body">

                                    StayStoria is a premium villa and bungalow rental platform offering curated, private
                                    stays across some of Maharashtra's most scenic destinations — including Panchgani,
                                    Mahabaleshwar, Lonavala, Alibaug, and Goa. With over 11 years of hospitality
                                    experience
                                    (formerly known as FionaStays), we specialise in handpicked properties that offer
                                    privacy, comfort, and a personalised experience.


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"  style="background-color: #E8DFC8">
                                    What kind of properties does StayStoria offer?

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    We offer private villas and bungalows across Panchgani, Mahabaleshwar, Lonavala,
                                    Alibaug, and Goa. Every property is individually curated — each one comes with a
                                    private
                                    pool, an on-site caretaker, BBQ facilities, and food availability. Pet-friendly
                                    options
                                    and specific amenities vary by property, so we recommend confirming at the time of
                                    booking.


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"  style="background-color: #E8DFC8">
                                    How do I book a villa or bungalow with StayStoria?

                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    Booking is simple and personal. Reach out to us directly on WhatsApp or give us a
                                    call.
                                    Share your preferred dates, location, and group size — and our team will recommend
                                    the
                                    best-suited property and confirm availability. Contact us at bookings@staystoria.com
                                    or
                                    via WhatsApp.


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour"  style="background-color: #E8DFC8">
                                    How far in advance should I book?

                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse show"
                                aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    We recommend booking at least 2-4 weeks in advance, especially for weekends, long
                                    weekends, and peak holiday seasons. Properties in Panchgani and Mahabaleshwar tend
                                    to
                                    fill up quickly during monsoon and winter months. Early booking ensures the best
                                    availability and rates.


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapsefive"  style="background-color: #E8DFC8">
                                    What is the starting price for a StayStoria villa?

                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    Pricing starts from ₹10,000 per night and varies based on the property, number of
                                    guests, and dates. Weekend stays, long weekends, and holiday seasons are priced
                                    higher.
                                    Please contact us for an accurate quote for your specific dates and group size.


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"  style="background-color: #E8DFC8">
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
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  style="background-color: #E8DFC8">
                                    What payment methods are accepted?

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample"  style="background-color: #E8DFC8">
                                <div class="accordion-body">

                                    We accept bank transfers and UPI payments. Details will be shared at the time of
                                    booking
                                    confirmation. All payments are acknowledged via email.


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  style="background-color: #E8DFC8">
                                    Is early check-in or late check-out possible?

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    Early check-in or late check-out may be accommodated based on availability and prior
                                    arrangement. Please inform us at the time of booking and we will do our best to make
                                    it
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
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  style="background-color: #E8DFC8">
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
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"  style="background-color: #E8DFC8">
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
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"  style="background-color: #E8DFC8">
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
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapsefour"  style="background-color: #E8DFC8">
                                    Do you accommodate last-minute bookings?

                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse show"
                                aria-labelledby="headingfour1" data-bs-parent="#accordionExample">
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
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"  style="background-color: #E8DFC8">
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
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"  style="background-color: #E8DFC8">
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
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@14.0.1/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.mySwiper', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                },
            },
        });
    </script>
</body>

</html>