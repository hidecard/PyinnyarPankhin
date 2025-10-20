<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admissions Page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

          <!-- Hero Section start-->
              <section class="hero-section-admissions text-center">
                <div class="container">
                    <div class="intro-text-contact">
                      <p class="lead-1" style="font-size: xx-large; color: #FF7300;">Start Your Journey With Us</p>
                      <p class="lead-2" style="font-size: x-large;">Explore our programs, learn about the admissions process, and apply today.</p>
                    </div>
                        <button class="butnn1">Apply Now</button>
                        <button class="butnn2">Request Info</button>
                        </div>
              </section>
          <!-- hero section end -->

           <!-- Why Choose Our University Start-->
                <section class="py-5">
                    <div class="container">
                        <div class="text-center mb-5">
                            <h2 class="fw-bold"  style="color: #6C3428;">Why Choose Our University</h2>
                            <p style="color: #6C3428;">Discover what makes us different</p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-3 text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h4  style="color: #6C3428;">Accredited Programs</h4>
                                <p  style="color: #6C3428;">Our programs meet the highest academic standards and are recognized globally.</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-globe-americas"></i>
                                </div>
                                <h4 style="color: #6C3428;">Diverse Community</h4>
                                <p  style="color: #6C3428;">Students from over 80 countries create a vibrant multicultural environment.</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <h4 style="color: #6C3428;">Career Support</h4>
                                <p  style="color: #6C3428;">90% of our graduates find employment within 6 months of graduation.</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="feature-icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <h4 style="color: #6C3428;">Modern Facilities</h4>
                                <p  style="color: #6C3428;">State-of-the-art labs, libraries, and recreational facilities for all students.</p>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- Why Choose Our University End -->

        <!-- Admission Process Start -->
          <section class="py-5 " style="background-color: #fff3e9;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color: #6C3428;">Admission Process</h2>
                <p class="lead text-muted">Follow these simple steps to join our community</p>
            </div>
            <div class="row text-center">
                <div class="col-md-2 process-step">
                    <div class="step-number">1</div>
                    <h5 style="color: #6C3428;">Choose a Program</h5>
                    <p style="color: #6C3428;">Browse our offerings and select your preferred program</p>
                </div>
                <div class="col-md-2 process-step">
                    <div class="step-number">2</div>
                    <h5 style="color: #6C3428;">Prepare Requirements</h5>
                    <p style="color: #6C3428;">Gather all necessary documents</p>
                </div>
                <div class="col-md-2 process-step">
                    <div class="step-number">3</div>
                    <h5 style="color: #6C3428;">Submit Application</h5>
                    <p style="color: #6C3428;">Complete and submit your application online</p>
                </div>
                <div class="col-md-2 process-step">
                    <div class="step-number">4</div>
                    <h5 style="color: #6C3428;">Attend Interview/Exam</h5>
                    <p style="color: #6C3428;">Some programs require additional assessments</p>
                </div>
                <div class="col-md-2 process-step">
                    <div class="step-number">5</div>
                    <h5 style="color: #6C3428;">Receive Offer</h5>
                    <p style="color: #6C3428;">Get your admission decision</p>
                </div>
                <div class="col-md-2">
                    <div class="step-number" style="background-color: #FF7300;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h5 style="color: #6C3428;">Start Learning</h5>
                    <p style="color: #6C3428;">Begin your academic journey</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <button class="btn-dpg">Detailed Process Guide</button>
            </div>
        </div>
    </section>
         <!-- Admissions Process end -->

        <!--Admissions Requirements Start-->
            <section class="py-5">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold" style="color: #6C3428;">Admission Requirements</h2>
                        <p style="color: #6C3428;">What you need to apply</p>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-5 mb-4">
                            <div class="requirements-card">
                                <h4>Undergraduate</h4>
                                <h5>Undergraduate Requirements</h5>
                                <ul class="requirements-list">
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i>Completed secondary education</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i> Minimum GPA of 3.0 (or equivalent)</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i>Official transcripts</li> <!-- New star icon -->
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i> Personal statement (500-1000 words)</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i> Letters of recommendation (2 required)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 mb-4">
                            <div class="requirements-card">
                                <h4>Graduate</h4>
                                <h5>Graduate Requirements</h5>
                                <ul class="requirements-list">
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i> Completed undergraduate degree</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i> Minimum GPA of 3.0 (or equivalent) in undergraduate studies</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i> Statement of purpose (750-1500 words)</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i> Official transcripts from all post-secondary institutions</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i> Letters of recommendation (3 required)</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i> GRE or GMAT scores (if required by program)</li>
                                    <li><i class="fa-solid fa-circle-check" style="color: #FF7300;"></i> Curriculum Vitae (CV) or Resume</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Admissions Requirements End -->

    <!-- Important Dates Start -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color: #6C3428;">Important Dates & Deadlines</h2>
                <p style="color: #6C3428;">Mark your calendar</p>
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table" >
                        <tr>
                            <th style="background-color: #6C3428; color: white;">Event</th>
                            <th style="background-color: #6C3428; color: white;">Fall Intake</th>
                            <th style="background-color: #6C3428; color: white;">Spring Intake</th>
                            <th style="background-color: #6C3428; color: white;">Summer Intake</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="color: #6C3428;">Applications Open</td>
                            <td style="color: #6C3428;">October 1</td>
                            <td style="color: #6C3428;">April 1</td>
                            <td>November 1</td>
                        </tr>
                        <tr>
                            <td style="color: #6C3428;">Priority Deadline</td>
                            <td style="color: #6C3428;" >January 15</td>
                            <td style="color: #6C3428;">July 15</td>
                            <td>February 15</td>
                        </tr>
                        <tr>
                            <td style="color: #6C3428;">Final Deadline</td>
                            <td style="color: #6C3428;">March 1</td>
                            <td style="color: #6C3428;">September 1</td>
                            <td style="color: #6C3428;">April 1</td>
                        </tr>
                        <tr>
                            <td style="color: #6C3428;">Entrance Exams</td>
                            <td style="color: #6C3428;">March 15</td>
                            <td style="color: #6C3428;">September 15</td>
                            <td style="color: #6C3428;">April 15</td>
                        </tr>
                        <tr>
                            <td style="color: #6C3428;">Decision Notification</td>
                            <td style="color: #6C3428;">April 15</td>
                            <td style="color: #6C3428;">October 15</td>
                            <td style="color: #6C3428;">May 15</td>
                        </tr>
                        <tr>
                            <td style="color: #6C3428;">Orientation</td>
                            <td style="color: #6C3428;">August 20</td>
                            <td style="color: #6C3428;">January 10</td>
                            <td style="color: #6C3428;">May 20</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- <div class="alert alert-warning mt-4">
                <i class="fas fa-exclamation-triangle me-2"></i>
                Some programs may have different deadlines. Please check specific program pages for details.
            </div> -->
        </div>
    </section>
    <!-- Important Dates End -->

        <!-- Tuition & Financial Aid Start-->
            <section class="py-5">
                <div class="container tuition-section">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold" style="color: #6C3428;">Tuition & Financial Aid</h2>
                        <p style="color: #6C3428;">Investing in your future</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 tuition-card" style="border: 1px solid #FF7300; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
                                <div class="card-body">
                                    <h4 style="color: #6C3428;">Undergraduate Programs</h4>
                                    <h5 style="color: #FF7300;">$15,000/year</h5>
                                    <p style="color: #6C3428;">Average tuition for full-time students (12-18 credits per semester)</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check me-2" style="color: #FF7300;"></i> Additional fees: $1,200/year</li>
                                        <li><i class="fas fa-check me-2" style="color: #FF7300;"></i> Room & board: $8,000-$12,000/year</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 tuition-card" style="border: 1px solid #FF7300; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
                                <div class="card-body">
                                    <h4 style="color: #6C3428;">Graduate Programs</h4>
                                    <h5 style="color: #FF7300;">$20,000/year</h5>
                                    <p style="color: #6C3428;">Average tuition for full-time students (9-12 credits per semester)</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check me-2" style="color: #FF7300;"></i> Additional fees: $1,500/year</li>
                                        <li><i class="fas fa-check me-2" style="color: #FF7300;"></i> Research/studio fees may apply</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 tuition-card" style="border: 1px solid #FF7300; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
                                <div class="card-body">
                                    <h4 style="color: #6C3428;">Financial Aid Options</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <h6 style="color: #6C3428;"><i class="fas fa-graduation-cap me-2" style="color: #FF7300;"></i> Scholarships</h6>
                                            <p>Merit-based and need-based awards available</p>
                                        </li>
                                        <li class="mb-3">
                                            <h6 style="color: #6C3428;"><i class="fas fa-briefcase me-2" style="color: #FF7300;"></i> Assistantships</h6>
                                            <p>Teaching and research positions with tuition remission</p>
                                        </li>
                                        <li class="mb-3">
                                            <h6 style="color: #6C3428;"><i class="fas fa-hand-holding-usd me-2" style="color: #FF7300;"></i> Loans</h6>
                                            <p>Federal and private loan options</p>
                                        </li>
                                        <li>
                                            <h6 style="color: #6C3428;"><i class="fas fa-calendar-check me-2" style="color: #FF7300;"></i> Payment Plans</h6>
                                            <p>Flexible monthly payment options</p>
                                        </li>
                                    </ul>
                                    <button class="affa">Apply for Financial Aid</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Tuition & Financial Aid End-->

        <!-- Meet Our Admissions Counselors section start -->
            <div class="section counselors-section py-5">
                    <h2 class="text-center fw-bold" style="color: #FF7300; font-family: Arial, Helvetica, sans-serif;">Meet Our Admissions Counselors</h2>
                    <div class="counselors mt-4">
                        <div class="counselor-card">
                            <img src="{{ asset('assets/images/Sarah Johnson.jpg') }}" alt="Sarah Johnson">
                            <h3 style="color: #FF7300;" class="mt-3">SARAH JOHNSON</h3>
                            <h3 style="color: #6C3428;">UNDERGRADUATE ADMISSIONS</h3>
                            <p style="color: #6C3428;">Sarah specializes in helping first-year students navigate the application process.</p>
                            <button class="email-btn">EMAIL SARAH</button>
                        </div>
                        <div class="counselor-card">
                            <img src="{{ asset('assets/images/Micheal.jpg') }}" alt="Michael Chen">
                            <h3 style="color: #FF7300;" class="mt-3">MICHAEL CHEN</h3>
                            <h3 style="color: #6C3428;">GRADUATE ADMISSIONS</h3>
                            <p style="color: #6C3428;">Michael assists students applying to our master's and doctoral programs.</p>
                            <button class="email-btn">EMAIL MICHAEL</button>
                        </div>
                        <div class="counselor-card">
                            <img src="{{ asset('assets/images/Priya.jpg') }}" alt="Priya Patel">
                            <h3 style="color: #FF7300;" class="mt-3">PRIYA PATEL</h3>
                            <h3 style="color: #6C3428;">INTERNATIONAL ADMISSIONS</h3>
                            <p style="color: #6C3428;">Priya supports international students through the visa and application process.</p>
                            <button class="email-btn">EMAIL PRIYA</button>
                        </div>
                    </div>
                </div>
         <!-- Meet Our Admissions Counselors section end -->

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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3788.744135976519!2d95.32630067464636!3d18.26754727685533!2m3!1f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c74149ab560691%3A0x8e3ab8b6a14524f7!2sPyinnyar%20Pankhin%20English%20Training%20Center!5e0!3m2!1sen!2smm!4v1748075909563!5m2!1sen!2smm" width="100%" height="100%" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </footer>
    <!-- Footer End -->
</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>
