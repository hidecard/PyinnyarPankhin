<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8e+z5l5c5a5e5a5e5a5e5a5e5a5e5a5e5a5" crossorigin="anonymous">
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

         <!-- hero section start -->
          <section class="hero-section">
            <div class="container">
                <div class="intro-text">
                    <p class="lead-1" style="font-size: xx-large;">To provide each student with the knowledge and skills to reach their individual potential to make positive contributions to Myanmar and the world wide</p>
                    <p class="lead-2" style="font-size: x-large;">Explore our programs, research, and vibrant student life.</p>
                </div>
                <button class="btn1">🎓 Apply Now</button>
                <button class="btn2">📚 Explore Programs</button>
            </div>
          </section>
          <!-- hero section end -->

          <!-- Section 2 start -->
            <section class="section-2 mt-5">
            <div class="container">
            <h2 style="color: #6C3428;">Latest News & Announcements</h2>
            <div class="announcement-container">
                @forelse($news as $item)
                <div class="box">
                    <h5 style="color: #FF7300;">{{ $item->title }}</h5>
                    <p>{{ Str::limit($item->content, 100) }}</p>
                    <small>{{ $item->published_date }}</small>
                </div>
                @empty
                <div class="box">Admissions Open for 2025</div>
                <div class="box">Library System Updated</div>
                <div class="box">Upcoming Convocation Ceremony</div>
                @endforelse
            </div>
            </div>
        </section>
           <!-- Section 2 end -->

            <!-- Section 3 start -->
            <section class="section-3 text-center">
                <div class=" mx-auto">
                <img src="{{ asset('assets/images/Person 1.jpg') }}" class="person" alt="#">
                <h3 class="mt-3" style="color: #6C3428;">Welcome from the President</h3>
                <p class="mt-2">At our university, we are committed to academic excellence, innovation, and cultivating leaders of tomorrow.</p>
                </div>
            </section>
             <!-- Section 3 end -->

            <!-- Section cart start -->
                <div class="section-cart text-center">
                    <div class="sc-cart">📖 Academics</div>
                    <div class="sc-cart">🏫 Departments</div>
                    <div class="sc-cart">📚 Library</div>
                    <div class="sc-cart">📝 Admissions</div>
                    <div class="sc-cart">🎉 Events</div>
                    <div class="sc-cart">🧑‍🏫 Faculty</div>
                </div>
             <!-- Section cart end  -->

      <!-- Featured Programs start -->
            <section class="featured-programs container mt-5">
                <div class="d-flex align-items-center mb-4">
                    <h3 style="color: #6C3428; margin-right: 20px;">Featured Programs</h3>
                </div>

                <div class="d-flex flex-wrap justify-content-center gap-4">
                    <div class="card" style="width: 400px; border: 1px solid #6C3428; border-radius: 10px;">
                        <img src="{{ asset('assets/images/Computer Science students.webp') }}" class="card-img-top" alt="Computer Science">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #FF7300;">Computer Science</h5>
                            <p class="card-text" style="color: #6C3428;">Discover the world of software, AI, and data science with our hands-on learning experience.</p>
                        </div>
                    </div>

                    <div class="card" style="width: 400px; border: 1px solid #6C3428; border-radius: 10px;">
                        <img src="{{ asset('assets/images/Psychology students.webp') }}" class="card-img-top" alt="Psychology">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #FF7300;">Psychology</h5>
                            <p class="card-text" style="color: #6C3428;">Advance your understanding of human behavior through cutting-edge psychological research and expert faculty guidance.</p>
                        </div>
                    </div>

                    <div class="card" style="width: 400px; border: 1px solid #6C3428; border-radius: 10px;">
                        <img src="{{ asset('assets/images/Business Administration students.jpg') }}" class="card-img-top" alt="Business Administration">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #FF7300;">Business Administration</h5>
                            <p class="card-text" style="color: #6C3428;">Develop strategic thinking and leadership skills for a successful business career.</p>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Featured Programs end -->

         <!-- Student Life & Testimonials Start -->
            <section class="container my-5">
                <h3 class="text-center mb-4" style="color: #6C3428; font-weight: bold;">
                    Student Life & Testimonials
                </h3>

                <div class="d-flex flex-wrap justify-content-center gap-4">
                    <div class="testimonial-box">
                        <p class="quote">"My experience here has been life-changing. I gained knowledge and lifelong friends."</p>
                        <p class="author" style="color: #6C3428;">– Aye Chan, Class of 2024</p>
                    </div>

                    <div class="testimonial-box">
                        <p class="quote">"Supportive faculty and exciting campus life made learning enjoyable every day."</p>
                        <p class="author" style="color: #6C3428;">– Ko Ko, Alumni</p>
                    </div>
                </div>
            </section>
        <!-- Student Life & Testimonials End -->

           <!-- Upcoming Events Start  -->
            <section class="upcoming-events">
                <div class="events-container">
                    <h2 class="events-title">Upcoming Events</h2>
                    <div class="events-grid">
                    @forelse($events as $event)
                    <div class="event-card">
                        <h4 style="color: #6C3428;">{{ $event->event_date }}</h4>
                        <p style="color: #6C3428;">{{ $event->title }}</p>
                    </div>
                    @empty
                    <div class="event-card">
                        <h4 style="color: #6C3428;">April 12, 2025</h4>
                        <p style="color: #6C3428;">Convocation Ceremony</p>
                    </div>
                    <div class="event-card">
                        <h4 style="color: #6C3428;">May 3, 2025</h4>
                        <p style="color: #6C3428;">Science Expo</p>
                    </div>
                    <div class="event-card">
                        <h4 style="color: #6C3428;">June 10, 2025</h4>
                        <p style="color: #6C3428;">Open Campus Day</p>
                    </div>
                    @endforelse
                    </div>
                    <div class="view-all">
                    <button class="view-button">View All Events</button>
                    </div>
                </div>
            </section>
           <!-- Upcoming Events End  -->

        <!-- Stats Section Start -->
        <section class="stats-section">
        <div class="stats-container">
            <div class="stat-box">
            <h3 class="stat-number">10,000+</h3>
            <p>Graduates</p>
            </div>
            <div class="stat-box">
            <h3 class="stat-number">50+</h3>
            <p>Departments</p>
            </div>
            <div class="stat-box">
            <h3 class="stat-number">30+</h3>
            <p>Years of Excellence</p>
            </div>
        </div>
        </section>
        <!-- Stats Section End -->

       <!-- Subscribe Section Start -->
         <section class="subscribe-section">
            <h2 class="subscribe-title">Stay Updated</h2>
            <div class="subscribe-container">
                <input type="email" placeholder="Enter your email" class="subscribe-input">
                <!-- <br> -->
                <button class="subscribe-button">Subscribe</button>
            </div>
        </section>
        <!-- Subscribe Section End  -->

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
