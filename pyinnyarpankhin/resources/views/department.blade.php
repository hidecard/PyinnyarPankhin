<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8e+z5l5c5e5f5e5f5e5f5e5f5e5f5e5f5e" crossorigin="anonymous">
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
          <section class="hero-section-department">
            <div class="container">
                <div class="intro-text2">
                    <h2 style="color: #FF7300;">Departments</h2>
                    <p class="lead-2" style="font-size: x-large">Explore our diverse academic departments, each dedicated to excellence in teaching, research, and community service.</p>
                </div>
                <a href="./department2.html"><button class="butn">Explore Programs</button></a>
            </div>
          </section>
          <!-- hero section end -->

           <!-- Faculties & Schools start -->
            <div class="container mt-5">
             <h2 style="color: #FF7300;"> Our Faculties & Schools</h2>
             <p style="color: #6c3428;"> Discover our comprehensive range of academic disciplines across five major faculties.</p>
            </div>

            <!-- Faculties & Schools cards start -->
            <div class="container my-4 d-flex justify-content-center align-items-center text-center">
              <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Department of Science -->
                <div class="col-lg-6">
                  <div class="card h-100 shadow-sm ">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #FF7300;"><i class="fas fa-flask me-2"></i>Department of Science</h5>
                      <p class="card-text">Offering programs in Physics, Chemistry, Biology, and Mathematics, fostering scientific inquiry and innovation.</p>
                        <button class="ex-btn">Explore Programs</button>

                    </div>
                  </div>
                </div>
                <!-- Department of Arts & Humanities -->
                <div class="col-lg-6">
                  <div class="card h-100 shadow-sm">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #FF7300;"><i class="fas fa-book-open me-2"></i>Department of Humanities, Arts and Social Science</h5>
                      <p class="card-text">Dedicated to literature, history, philosophy, and languages, nurturing critical thinking and creativity.</p>
                      <button class="ex-btn">Explore Programs</button>
                    </div>
                  </div>
                </div>

                <!-- Department of Engineering & Technology -->
                <div class="col-lg-6">
                  <div class="card h-100 shadow-sm">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #FF7300;"><i class="fas fa-cogs me-2"></i>Department of Engineering and Computing</h5>
                      <p class="card-text">Equipping students with skills in engineering, computer science, and emerging technologies.</p>
                      <button class="ex-btn">Explore Programs</button>
                    </div>
                  </div>
                </div>
                <!-- Department of Business & Management -->
                <div class="col-lg-6">
                  <div class="card h-100 shadow-sm">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #FF7300;"><i class="fas fa-briefcase me-2"></i>Department of Business and Management</h5>
                      <p class="card-text">Preparing future leaders in business, finance, and management with practical and theoretical knowledge.</p>
                      <button class="ex-btn">Explore Programs</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      <!-- Hignlight Box -->
             <div class="highlight-box">
          <h3><i class="fas fa-flask"></i> World-Class Research Facilities</h3>
          <p>Our students have access to advanced laboratories and research equipment, including a newly established nanotechnology center, molecular biology lab, and high-performance computing cluster for data science research.</p>
      </div>
             <div class="container">
              <!-- Program List -->
            <div class="info-card" id="programs">
                <h3><i class="fas fa-graduation-cap"></i> Our Academic Programs</h3>
                <ul class="styled-list">
                    <li>Bachelor of Science in Biology</li>
                    <li>Bachelor of Science in Chemistry</li>
                    <li>Bachelor of Science in Physics</li>
                    <li>Bachelor of Science in Mathematics</li>
                    <li>Master of Science in Biotechnology</li>
                    <li>Master of Science in Environmental Science</li>
                    <li>PhD in Natural Sciences</li>
                    <li>PhD in Applied Mathematics</li>
                    <li>Bachelor of Science in Computer Science</li>
                    <li>Master of Science in Data Science</li>
                </ul>
            </div>

                        <!-- Research Areas -->
            <div class="info-card">
                <h3><i class="fas fa-microscope"></i> Research Focus Areas</h3>
                <ul class="styled-list">
                    <li>Renewable Energy Technologies</li>
                    <li>Climate Change and Sustainability</li>
                    <li>Nanotechnology and Materials Science</li>
                    <li>Biomedical Research</li>
                    <li>Theoretical and Applied Physics</li>
                    <li>Data Science and Analytics</li>
                    <li>Marine Biology and Conservation</li>
                    <li>Computational Chemistry</li>
                    <li>Artificial Intelligence Applications</li>
                    <li>Agricultural Biotechnology</li>
                </ul>
            </div>

            <!-- Career Pathways -->
            <div class="info-card">
                <h3><i class="fas fa-briefcase"></i> Career Pathways</h3>
                <p>Our graduates are highly sought after and pursue successful careers in diverse fields:</p>
                <ul class="styled-list">
                    <li>Research Scientists</li>
                    <li>Environmental Consultants</li>
                    <li>Pharmaceutical Researchers</li>
                    <li>Data Scientists & Analysts</li>
                    <li>University Professors</li>
                    <li>Biotechnologists</li>
                    <li>Government Science Advisors</li>
                    <li>Laboratory Managers</li>
                    <li>Science Policy Makers</li>
                    <li>Technology Entrepreneurs</li>
                </ul>
            </div>
            </div>
            <div class="highlight-box">
                <h3><i class="fas fa-handshake"></i> Industry Partnerships</h3>
                <p>We maintain strong collaborations with leading industries and research institutions, providing students with internship opportunities and real-world research projects.</p>
            </div>
        </div>
           <!-- Faculties & Schools end -->

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
