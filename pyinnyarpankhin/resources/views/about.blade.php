<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8z4+2e5c7e5a5e5a5e5a5e5a5e5a5e5a5e5" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
                <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white" style="border: 1px solid #FF7300;">
        <div class="container-fluid">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" style="width: 50px; height: 50px;">
            <a class="navbar-brand ms-3 fw-bold" href="#" style="color: #FF7300;">Pyinnyar Pankhin <br> University</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav " style="margin-left: 50px;">
                <li class="nav-item menu " style="margin-right: 50px;">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}" >Home</a>
                </li>
                <li class="nav-item menu" style="margin-right: 50px;">
                <a class="nav-link active" href="{{ route('academics') }}">Academics</a>
                </li>
                 <li class="nav-item menu" style="margin-right: 50px;">
                <a class="nav-link active" href="{{ route('certificate') }}">Certificate</a>
                </li>
                <li class="nav-item menu" style="margin-right: 50px;">
                <a class="nav-link active" href="{{ route('department') }}">Department</a>
                </li>
                <li class="nav-item menu" style="margin-right: 50px;">
                <a class="nav-link active" href="{{ route('admissions') }}">Admissions</a>
                </li>
                <li class="nav-item menu" style="margin-right: 50px;">
                <a class="nav-link active" href="{{ route('library') }}">Library</a>
                </li>
                <li class="nav-item menu" style="margin-right: 50px;">
                <a class="nav-link active" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item menu" style="margin-right: 50px;">
                <a class="nav-link active" href="{{ route('event') }}">Events</a>
                </li>
                <li class="nav-item menu" style="margin-right: 50px;">
                <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
         <!-- Navbar End -->

    <!-- Our Story -->
    <section id="story" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4"  style="color: #6c3428;">🎓 Our Story</h2>
                    <p  style="color: #6c3428;">Founded in 1962, Example University has grown from a small academic institution to a nationally recognized university known for excellence in teaching, research, and community service.</p>
                    <p  style="color: #6c3428;">Today, we serve over 20,000 students across 100+ programs, fostering innovation and leadership.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/Hero_section image.jpg') }}" alt="University History" class="img-fluid rounded shadow" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section id="mission" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title" style="color: #6c3428;">🌟 Mission</h3>
                            <p class="card-text"  style="color: #6c3428;">"To empower students through transformative education and innovation-driven research."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title" style="color: #6c3428;">🔭 Vision</h3>
                            <p class="card-text " style="color: #6c3428;">"To be a global leader in education, research, and societal impact."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section id="values" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5"  style="color: #6c3428;">🏫 Core Values</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-shield-alt fa-3x mb-3" style="color: #FF7300;"></i>
                            <h5 class="card-title"  style="color: #6c3428;">Integrity</h5>
                            <p class="card-text"  style="color: #6c3428;">Ethical conduct in all endeavors.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-award fa-3x mb-3" style="color: #FF7300;"></i>
                            <h5 class="card-title"  style="color: #6c3428;">Excellence</h5>
                            <p class="card-text"  style="color: #6c3428;">Commitment to the highest standards.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-users fa-3x mb-3" style="color: #FF7300;"></i>
                            <h5 class="card-title"  style="color: #6c3428;">Inclusivity</h5>
                            <p class="card-text"  style="color: #6c3428;">A diverse and welcoming community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership -->
    <section id="leadership" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5"  style="color: #6c3428;">👨‍🏫 Leadership</h2>
            <div class="row g-4" id="leadership-cards">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('assets/images/Yuri.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: #FF7300;">Dr.Yuri</h5>
                            <h5 style="color: #6c3428;">Chancellor</h5>
                            <p class="card-text"  style="color: #6c3428;">Renowned scholar in Education with 25+ years of leadership experience.</p>
                        </div>
                    </div>
                </div>
                   <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('assets/images/Jane.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: #FF7300;">Dr. Jane Smith</h5>
                            <h5 style="color: #6c3428;">Vice-Chancellor</h5>
                            <p class="card-text"  style="color: #6c3428;">Expert in Computer Science and academic administration.</p>
                        </div>
                    </div>
                </div>
                   <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('assets/images/John.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: #FF7300;">Dr. John Doe</h5>
                            <h5 style="color: #6c3428;">Dean of Engineering</h5>
                            <p class="card-text"  style="color: #6c3428;">Pioneer in sustainable infrastructure research . Dr. John Doe</p>
                        </div>
                    </div>
                </div>
                <!-- Add more leaders here -->
            </div>
        </div>
    </section>

    <!-- Campus & Facilities -->
    <section id="campus" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="color: #6c3428;">🗺️ Campus & Facilities</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <img src="{{ asset('assets/images/in library 1.jpg') }}" class="card-img-top" alt="Campus Library" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title"  style="color: #6c3428;">State-of-the-Art Library</h5>
                            <p class="card-text" style="color: #6c3428;">Over 2 million resources and 24/7 study spaces.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/BmYv8XGl-YU?si=UvjQXHVa2JXk0A0p&amp;start=56" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"  style="color: #6c3428;">Virtual Campus Tour</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact/Location -->
    <section id="contact" class="py-5 text-white" style="background-color: #F2D2B8;">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="color: #6c3428;">📍 Location</h2>
            <div class="row g-4">
                <div class="col-lg-6">
                    <h4 style="color: #6c3428;"><i class="fas fa-map-marker-alt me-2" style="color: #FF7300;"></i> Address</h4>
                    <p  style="color: #6c3428;">Myanaung, Ayeyarwaddy Myanmar</p>
                    <h4 class="mt-4"  style="color: #6c3428;"><i class="fas fa-phone me-2"  style="color: #FF7300"></i> Contact</h4>
                    <p  style="color: #6c3428;">Email: pininyarpankhin@gmail.com<br  style="color: #6c3428;">Phone: (09) 456789101</p>
                </div>
                <div class="col-lg-6">
                    <div class="w-100" style="height: 300px; border-radius: 10px; overflow: hidden;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3788.744135976519!2d95.32630067464636!3d18.26754727685533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c74149ab560691%3A0x8e3ab8b6a14524f7!2sPyinnyar%20Pankhin%20English%20Training%20Center!5e0!3m2!1sen!2smm!4v1748075909563!5m2!1sen!2smm" width="100%" height="100%" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Footer Start -->
         <footer class="footer">
            <div class="footer-container">
                <div class="footer-column">
                <h4>About</h4>
                <p>Our university is committed to academic excellence and student success.</p>
                </div>
                <div class="footer-column">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Contact Info</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                </div>
                <div class="footer-column">
                <h4>Campus Address</h4>
                <p>Pyinnyar Panknin University , Myanaung, Ayeyarwaddy Myanmar</p>
                </div>
                <div class="footer-column">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3788.744135976519!2d95.32630067464636!3d18.26754727685533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c74149ab560691%3A0x8e3ab8b6a14524f7!2sPyinnyar%20Pankhin%20English%20Training%20Center!5e0!3m2!1sen!2smm!4v1748075909563!5m2!1sen!2smm" width="100%" height="100%" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </footer>
    <!-- Footer End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>
