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
    <div style="background-color: #f5f0e7;">
 <img src="{{ asset('public/frontend/images/17753770242.jpg') }}" class="img-fluid" alt="..."
        style="width: 90%; height: 70vh;margin-left: 70px;  background-color: #f5f0e7;">
    </div>
   

    <div class="container-fluid" style="width: 100%; height: 70vh; background-color:#f5f0e7; padding-top: 50px;">
        <div class="container mb-3">
        <p>Private villas in Maharashtra's most loved getaway destinations. Curated for groups who want the
            whole place to themselves.</p>

        <p>
            StayStoria curates, hosts and manages private villas for groups across Maharashtra. If you're
            planning a weekend getaway, a family reunion, or a corporate offsite that doesn't feel like one,
            this is where you find the right place. We list private villas across Panchgani, Mahabaleshwar,
            Lonavala, Pawna, Igatpuri, Karjat and Goa. Every villa has a private pool. None of them are shared
            with other guests.
        </p>

        <p>
            Most platforms list properties. We manage ours. Every villa on StayStoria has been visited, vetted
            and is physically overseen by us. Not a property manager, not an automated system. When you arrive,
            the place is ready because someone made sure it was. We're also selective about what we list. If a
            property doesn't meet the standard we'd want for our own guests, it doesn't go up. That's a small
            list. We're fine with that.
        </p>

        <p>

            Our founder, Faiza grew up in Panchgani. Long before StayStoria existed, she was the person her
            friends called whenever they visited the hill stations and needed honest advice on where to stay. A
            decade ago, when travellers had few reliable options online and locals knew exactly where tourists
            got overcharged, she decided to put that knowledge to real use. StayStoria began as an aggregator,
            bringing together the stays that were genuinely worth recommending. Over time, a few hand-picked
            villas joined the portfolio. And then a few more. What started as local knowledge quietly became a
            platform that over 10,000 groups have since called their weekend home.
        </p>
        <p>
            We have been doing this since 2014, previously as FionaStays. Over 100,000 guests have stayed with
            us across the years. A large number of our new guests find us through someone who has previously
            stayed with us and recommended us to others. We rebranded to StayStoria because the name finally
            said what we believed: every stay should be a story worth telling. The work behind that has not
            changed at all.
        </p>
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