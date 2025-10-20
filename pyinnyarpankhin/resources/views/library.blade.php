<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Page</title>
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

         <!-- hero section start -->
          <section class="hero-section-library">
            <div class="container">
                <div class="intro-text">
                    <p class="lead-1" style="font-size: xx-large; color: #FF7300;">University Library</p>
                    <p class="lead-2" style="font-size: x-large;">"Unlock Knowledge, Empower Your Future."</p>
                </div>
            </div>
          </section>
          <!-- hero section end -->

         <!-- Library Section Start -->
            <section id="overview" class="mb-5 container mt-5">
                <h2 class="mb-4 fw-bold" style="color: #6c3428;">Library Overview</h2>
                <div class="row align-items-center">
                    <!-- Text Column -->
                    <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                        <p style="color: #6c3428;">
                            The University Library was established in 1950 and has been a cornerstone of academic excellence ever since.
                            Our mission is to provide comprehensive resources and services to support the research, teaching, and learning needs
                            of the university community.
                        </p>
                        <p style="color: #6c3428;">
                            We house over 500,000 volumes, including books, journals, and special collections, along with access to thousands of electronic resources.
                        </p>
                        <div class="mt-4">
                            <h5 style="color: #6c3428;"><i class="fas fa-clock me-2" style="color: #FF7300;"></i> Opening Hours</h5>
                            <ul class="list-unstyled">
                                <li style="color: #6c3428;">Monday–Friday: 8:00 AM – 10:00 PM</li>
                                <li style="color: #6c3428;">Saturday: 9:00 AM – 6:00 PM</li>
                                <li style="color: #6c3428;">Sunday: 12:00 PM – 6:00 PM</li>
                            </ul>
                            <h5 style="color: #6c3428;"><i class="fas fa-phone me-2" style="color: #FF7300;"></i> Contact</h5>
                            <address style="color: #6c3428;">
                                Email: <a href="" > pyinnyarpankhin@gmail.com</a><br>
                                Phone: <a href="">(09) 456789101</a>
                            </address>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="col-lg-6 col-md-12">
                        <img src="{{ asset('assets/images/in library.jpg') }}" alt="Students studying in the university library" class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </section>
        <!-- Library Section End -->


       <!-- Library Services start -->
    <section id="services" class="mb-5" style="padding: 2rem;">
        <h2 class="section-title1">Library Services</h2>
        <div class="row" style="display: flex; gap: 1.5rem; flex-wrap: wrap;">
            <div class="col-md-3" style="flex: 1 1 calc(25% - 1.5rem); min-width: 220px;">
                <div class="card service-card h-100">
                    <div class="card-body text-center" style="padding: 2rem;">
                        <div class="service-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h5 style="color: #6C3428;">Book Borrowing & Returning</h5>
                        <p style="color: #6C3428;">Borrow up to 15 items for 4 weeks with possible renewals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="flex: 1 1 calc(25% - 1.5rem); min-width: 220px;">
                <div class="card service-card h-100">
                    <div class="card-body text-center" style="padding: 2rem;">
                        <div class="service-icon">
                            <i class="fas fa-door-open"></i>
                        </div>
                        <h5 style="color: #6C3428;">Study Room Booking</h5>
                        <p style="color: #6C3428;">Reserve study rooms for group work or individual study.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="flex: 1 1 calc(25% - 1.5rem); min-width: 220px;">
                <div class="card service-card h-100">
                    <div class="card-body text-center" style="padding: 2rem;">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h5 style="color: #6C3428;">Research Assistance</h5>
                        <p style="color: #6C3428;">Get help from our expert librarians for your research projects.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="flex: 1 1 calc(25% - 1.5rem); min-width: 220px;">
                <div class="card service-card h-100">
                    <div class="card-body text-center" style="padding: 2rem;">
                        <div class="service-icon">
                            <i class="fas fa-print"></i>
                        </div>
                        <h5 style="color: #6C3428;">Printing & Copying</h5>
                        <p style="color: #6C3428;">Print, scan, and photocopy services available throughout the library.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- library Services end  -->

       <!-- E-Resources start -->
        <section id="eresources" class="mb-5 ">
            <div class="container">
            <h2 class="section-title p-5">E-Resources</h2>
            <div class="row">
                <div class="col-md-4 mt-3">
                    <div class="resource-card text-center">
                        <i class="fas fa-book-open fa-3x mb-3"></i>
                        <h4 style="color: #6C3428;">E-books</h4>
                        <p style="color: #6C3428;">Access over 200,000 e-books across all disciplines.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="resource-card text-center">
                        <i class="fas fa-newspaper fa-3x mb-3"></i>
                        <h4 style="color: #6C3428;">Journals</h4>
                        <p style="color: #6C3428;">Thousands of academic journals at your fingertips.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="resource-card text-center">
                        <i class="fas fa-database fa-3x mb-3"></i>
                        <h4 style="color: #6C3428;">Research Databases</h4>
                        <p style="color: #6C3428;">Specialized databases for advanced research.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button class="ver-btn"><i class="fas fa-external-link-alt me-2"></i> View E-Resources</button>
            </div>
            </div>
        </section>
        <!-- E-Resources end -->

                <!-- Library Guides & Tutorials start -->
        <section id="guides" class="mb-5 p-5">
            <h2 class="section-title">Library Guides & Tutorials</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 style="color: #6C3428;"><i class="fas fa-bookmark  me-2" style="color: #FF7300;"></i> How to Use the Catalog</h5>
                            <p style="color: #6C3428;">Learn how to effectively search our catalog to find the resources you need.</p>
                            <a href="#" class="btn btn-sm btn" style="color: white; background-color: #FF7300;">View Guide</a>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 style="color: #6C3428;"><i class="fas fa-bookmark  me-2" style="color: #FF7300;"></i> Research Tips</h5>
                            <p style="color: #6C3428;">Expert advice on conducting academic research and citing sources.</p>
                            <a href="#" class="btn btn-sm btn" style="color: white; background-color: #FF7300;">View Guide</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="color: #6C3428;"><i class="fas fa-video me-2" style="color: #FF7300;"></i> Video Tutorials</h5>
                            <div class="ratio ratio-16x9 mb-3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CXkjHLBr_y0?si=hQ5LetawAjOCq969&amp;start=11" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                            </div>
                            <p style="color: #6C3428;">Watch our tutorial videos to get the most out of library resources.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <!-- Library Guides & Tutorials end -->



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
