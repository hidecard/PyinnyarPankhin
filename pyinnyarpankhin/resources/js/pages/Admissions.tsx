import { Head, Link } from '@inertiajs/react';

export default function Admissions() {
    return (
        <>
            <Head title="Admissions - Pyinnyar Pankhin University" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
            <link rel="stylesheet" href="/assets/css/style.css" />
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

            {/* Navbar Start */}
            <nav className="navbar navbar-expand-lg bg-white" style={{ border: '1px solid #FF7300' }}>
                <div className="container-fluid">
                    <img src="/assets/images/logo.png" alt="" style={{ width: '50px', height: '50px' }} />
                    <a className="navbar-brand ms-3 fw-bold" href="#" style={{ color: '#FF7300' }}>Pyinnyar Pankhin <br /> University</a>
                    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                    </button>
                    <div className="collapse navbar-collapse" id="navbarNav">
                        <ul className="navbar-nav" style={{ marginLeft: '50px' }}>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <Link className="nav-link active" href={route('home')}>Home</Link>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <Link className="nav-link active" href={route('academics')}>Academics</Link>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <Link className="nav-link active" href={route('department')}>Department</Link>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <Link className="nav-link active" href={route('admissions')}>Admissions</Link>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <Link className="nav-link active" href={route('library')}>Library</Link>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <Link className="nav-link active" href={route('about')}>About</Link>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <Link className="nav-link active" href={route('event')}>Events</Link>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <Link className="nav-link active" href={route('contact')}>Contact</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {/* Navbar End */}

            {/* Hero Section start */}
            <section className="hero-section-admissions text-center">
                <div className="container">
                    <div className="intro-text-contact">
                        <p className="lead-1" style={{ fontSize: 'xx-large', color: '#FF7300' }}>Start Your Journey With Us</p>
                        <p className="lead-2" style={{ fontSize: 'x-large' }}>Explore our programs, learn about the admissions process, and apply today.</p>
                    </div>
                    <button className="butnn1">Apply Now</button>
                    <button className="butnn2">Request Info</button>
                </div>
            </section>
            {/* hero section end */}

            {/* Why Choose Our University Start */}
            <section className="py-5">
                <div className="container">
                    <div className="text-center mb-5">
                        <h2 className="fw-bold" style={{ color: '#6C3428' }}>Why Choose Our University</h2>
                        <p style={{ color: '#6C3428' }}>Discover what makes us different</p>
                    </div>
                    <div className="row g-4">
                        <div className="col-md-3 text-center">
                            <div className="feature-icon">
                                <i className="fas fa-award"></i>
                            </div>
                            <h4 style={{ color: '#6C3428' }}>Accredited Programs</h4>
                            <p style={{ color: '#6C3428' }}>Our programs meet the highest academic standards and are recognized globally.</p>
                        </div>
                        <div className="col-md-3 text-center">
                            <div className="feature-icon">
                                <i className="fas fa-globe-americas"></i>
                            </div>
                            <h4 style={{ color: '#6C3428' }}>Diverse Community</h4>
                            <p style={{ color: '#6C3428' }}>Students from over 80 countries create a vibrant multicultural environment.</p>
                        </div>
                        <div className="col-md-3 text-center">
                            <div className="feature-icon">
                                <i className="fas fa-briefcase"></i>
                            </div>
                            <h4 style={{ color: '#6C3428' }}>Career Support</h4>
                            <p style={{ color: '#6C3428' }}>90% of our graduates find employment within 6 months of graduation.</p>
                        </div>
                        <div className="col-md-3 text-center">
                            <div className="feature-icon">
                                <i className="fas fa-university"></i>
                            </div>
                            <h4 style={{ color: '#6C3428' }}>Modern Facilities</h4>
                            <p style={{ color: '#6C3428' }}>State-of-the-art labs, libraries, and recreational facilities for all students.</p>
                        </div>
                    </div>
                </div>
            </section>
            {/* Why Choose Our University End */}

            {/* Admission Process Start */}
            <section className="py-5" style={{ backgroundColor: '#fff3e9' }}>
                <div className="container">
                    <div className="text-center mb-5">
                        <h2 className="fw-bold" style={{ color: '#6C3428' }}>Admission Process</h2>
                        <p className="lead text-muted">Follow these simple steps to join our community</p>
                    </div>
                    <div className="row text-center">
                        <div className="col-md-2 process-step">
                            <div className="step-number">1</div>
                            <h5 style={{ color: '#6C3428' }}>Choose a Program</h5>
                            <p style={{ color: '#6C3428' }}>Browse our offerings and select your preferred program</p>
                        </div>
                        <div className="col-md-2 process-step">
                            <div className="step-number">2</div>
                            <h5 style={{ color: '#6C3428' }}>Prepare Requirements</h5>
                            <p style={{ color: '#6C3428' }}>Gather all necessary documents</p>
                        </div>
                        <div className="col-md-2 process-step">
                            <div className="step-number">3</div>
                            <h5 style={{ color: '#6C3428' }}>Submit Application</h5>
                            <p style={{ color: '#6C3428' }}>Complete and submit your application online</p>
                        </div>
                        <div className="col-md-2 process-step">
                            <div className="step-number">4</div>
                            <h5 style={{ color: '#6C3428' }}>Attend Interview/Exam</h5>
                            <p style={{ color: '#6C3428' }}>Some programs require additional assessments</p>
                        </div>
                        <div className="col-md-2 process-step">
                            <div className="step-number">5</div>
                            <h5 style={{ color: '#6C3428' }}>Receive Offer</h5>
                            <p style={{ color: '#6C3428' }}>Get your admission decision</p>
                        </div>
                        <div className="col-md-2">
                            <div className="step-number" style={{ backgroundColor: '#FF7300' }}>
                                <i className="fas fa-graduation-cap"></i>
                            </div>
                            <h5 style={{ color: '#6C3428' }}>Start Learning</h5>
                            <p style={{ color: '#6C3428' }}>Begin your academic journey</p>
                        </div>
                    </div>
                    <div className="text-center mt-4">
                        <button className="btn-dpg">Detailed Process Guide</button>
                    </div>
                </div>
            </section>
            {/* Admissions Process end */}

            {/* Admissions Requirements Start */}
            <section className="py-5">
                <div className="container">
                    <div className="text-center mb-5">
                        <h2 className="fw-bold" style={{ color: '#6C3428' }}>Admission Requirements</h2>
                        <p style={{ color: '#6C3428' }}>What you need to apply</p>
                    </div>

                    <div className="row justify-content-center">
                        <div className="col-md-5 mb-4">
                            <div className="requirements-card">
                                <h4>Undergraduate</h4>
                                <h5>Undergraduate Requirements</h5>
                                <ul className="requirements-list">
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> Completed secondary education</li>
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> Minimum GPA of 3.0 (or equivalent)</li>
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> Official transcripts</li>
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> Personal statement (500-1000 words)</li>
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> Letters of recommendation (2 required)</li>
                                </ul>
                            </div>
                        </div>
                        <div className="col-md-5 mb-4">
                            <div className="requirements-card">
                                <h4>Graduate</h4>
                                <h5>Graduate Requirements</h5>
                                <ul className="requirements-list">
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> Completed undergraduate degree</li>
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> Minimum GPA of 3.0 (or equivalent) in undergraduate studies</li>
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> Statement of purpose (750-1500 words)</li>
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> Official transcripts from all post-secondary institutions</li>
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> Letters of recommendation (3 required)</li>
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> GRE or GMAT scores (if required by program)</li>
                                    <li><i className="fa-solid fa-circle-check" style={{ color: '#FF7300' }}></i> Curriculum Vitae (CV) or Resume</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {/* Admissions Requirements End */}

            {/* Important Dates Start */}
            <section className="py-5 bg-light">
                <div className="container">
                    <div className="text-center mb-5">
                        <h2 className="fw-bold" style={{ color: '#6C3428' }}>Important Dates & Deadlines</h2>
                        <p style={{ color: '#6C3428' }}>Mark your calendar</p>
                    </div>

                    <div className="table-responsive">
                        <table className="table table-hover">
                            <thead className="table" style={{ backgroundColor: '#6C3428', color: 'white' }}>
                                <tr>
                                    <th>Event</th>
                                    <th>Fall Intake</th>
                                    <th>Spring Intake</th>
                                    <th>Summer Intake</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style={{ color: '#6C3428' }}>Applications Open</td>
                                    <td style={{ color: '#6C3428' }}>October 1</td>
                                    <td style={{ color: '#6C3428' }}>April 1</td>
                                    <td style={{ color: '#6C3428' }}>November 1</td>
                                </tr>
                                <tr>
                                    <td style={{ color: '#6C3428' }}>Priority Deadline</td>
                                    <td style={{ color: '#6C3428' }}>January 15</td>
                                    <td style={{ color: '#6C3428' }}>July 15</td>
                                    <td>February 15</td>
                                </tr>
                                <tr>
                                    <td style={{ color: '#6C3428' }}>Final Deadline</td>
                                    <td style={{ color: '#6C3428' }}>March 1</td>
                                    <td style={{ color: '#6C3428' }}>September 1</td>
                                    <td style={{ color: '#6C3428' }}>April 1</td>
                                </tr>
                                <tr>
                                    <td style={{ color: '#6C3428' }}>Entrance Exams</td>
                                    <td style={{ color: '#6C3428' }}>March 15</td>
                                    <td style={{ color: '#6C3428' }}>September 15</td>
                                    <td style={{ color: '#6C3428' }}>April 15</td>
                                </tr>
                                <tr>
                                    <td style={{ color: '#6C3428' }}>Decision Notification</td>
                                    <td style={{ color: '#6C3428' }}>April 15</td>
                                    <td style={{ color: '#6C3428' }}>October 15</td>
                                    <td style={{ color: '#6C3428' }}>May 15</td>
                                </tr>
                                <tr>
                                    <td style={{ color: '#6C3428' }}>Orientation</td>
                                    <td style={{ color: '#6C3428' }}>August 20</td>
                                    <td style={{ color: '#6C3428' }}>January 10</td>
                                    <td style={{ color: '#6C3428' }}>May 20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            {/* Important Dates End */}

            {/* Tuition & Financial Aid Start */}
            <section className="py-5">
                <div className="container tuition-section">
                    <div className="text-center mb-5">
                        <h2 className="fw-bold" style={{ color: '#6C3428' }}>Tuition & Financial Aid</h2>
                        <p style={{ color: '#6C3428' }}>Investing in your future</p>
                    </div>

                    <div className="row g-4">
                        <div className="col-md-4">
                            <div className="card h-100 tuition-card" style={{ border: '1px solid #FF7300', borderRadius: '10px', boxShadow: '0 4px 8px rgba(0, 0, 0, 0.1)', transition: 'transform 0.3s' }}>
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>Undergraduate Programs</h4>
                                    <h5 style={{ color: '#FF7300' }}>$15,000/year</h5>
                                    <p style={{ color: '#6C3428' }}>Average tuition for full-time students (12-18 credits per semester)</p>
                                    <ul className="list-unstyled">
                                        <li><i className="fas fa-check me-2" style={{ color: '#FF7300' }}></i> Additional fees: $1,200/year</li>
                                        <li><i className="fas fa-check me-2" style={{ color: '#FF7300' }}></i> Room & board: $8,000-$12,000/year</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-4">
                            <div className="card h-100 tuition-card" style={{ border: '1px solid #FF7300', borderRadius: '10px', boxShadow: '0 4px 8px rgba(0, 0, 0, 0.1)', transition: 'transform 0.3s' }}>
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>Graduate Programs</h4>
                                    <h5 style={{ color: '#FF7300' }}>$20,000/year</h5>
                                    <p style={{ color: '#6C3428' }}>Average tuition for full-time students (9-12 credits per semester)</p>
                                    <ul className="list-unstyled">
                                        <li><i className="fas fa-check me-2" style={{ color: '#FF7300' }}></i> Additional fees: $1,500/year</li>
                                        <li><i className="fas fa-check me-2" style={{ color: '#FF7300' }}></i> Research/studio fees may apply</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-4">
                            <div className="card h-100 tuition-card" style={{ border: '1px solid #FF7300', borderRadius: '10px', boxShadow: '0 4px 8px rgba(0, 0, 0, 0.1)', transition: 'transform 0.3s' }}>
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>Financial Aid Options</h4>
                                    <ul className="list-unstyled">
                                        <li className="mb-3">
                                            <h6 style={{ color: '#6C3428' }}><i className="fas fa-graduation-cap me-2" style={{ color: '#FF7300' }}></i> Scholarships</h6>
                                            <p>Merit-based and need-based awards available</p>
                                        </li>
                                        <li className="mb-3">
                                            <h6 style={{ color: '#6C3428' }}><i className="fas fa-briefcase me-2" style={{ color: '#FF7300' }}></i> Assistantships</h6>
                                            <p>Teaching and research positions with tuition remission</p>
                                        </li>
                                        <li className="mb-3">
                                            <h6 style={{ color: '#6C3428' }}><i className="fas fa-hand-holding-usd me-2" style={{ color: '#FF7300' }}></i> Loans</h6>
                                            <p>Federal and private loan options</p>
                                        </li>
                                        <li>
                                            <h6 style={{ color: '#6C3428' }}><i className="fas fa-calendar-check me-2" style={{ color: '#FF7300' }}></i> Payment Plans</h6>
                                            <p>Flexible monthly payment options</p>
                                        </li>
                                    </ul>
                                    <button className="affa">Apply for Financial Aid</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {/* Tuition & Financial Aid End */}

            {/* Meet Our Admissions Counselors section start */}
            <div className="section counselors-section py-5">
                <h2 className="text-center fw-bold" style={{ color: '#FF7300', fontFamily: 'Arial, Helvetica, sans-serif' }}>Meet Our Admissions Counselors</h2>
                <div className="counselors mt-4">
                    <div className="counselor-card">
                        <img src="/assets/images/Sarah Johnson.jpg" alt="Sarah Johnson" />
                        <h3 style={{ color: '#FF7300' }} className="mt-3">SARAH JOHNSON</h3>
                        <h3 style={{ color: '#6C3428' }}>UNDERGRADUATE ADMISSIONS</h3>
                        <p style={{ color: '#6C3428' }}>Sarah specializes in helping first-year students navigate the application process.</p>
                        <button className="email-btn">EMAIL SARAH</button>
                    </div>
                    <div className="counselor-card">
                        <img src="/assets/images/Micheal.jpg" alt="Michael Chen" />
                        <h3 style={{ color: '#FF7300' }} className="mt-3">MICHAEL CHEN</h3>
                        <h3 style={{ color: '#6C3428' }}>GRADUATE ADMISSIONS</h3>
                        <p style={{ color: '#6C3428' }}>Michael assists students applying to our master's and doctoral programs.</p>
                        <button className="email-btn">EMAIL MICHAEL</button>
                    </div>
                    <div className="counselor-card">
                        <img src="/assets/images/Priya.jpg" alt="Priya Patel" />
                        <h3 style={{ color: '#FF7300' }} className="mt-3">PRIYA PATEL</h3>
                        <h3 style={{ color: '#6C3428' }}>INTERNATIONAL ADMISSIONS</h3>
                        <p style={{ color: '#6C3428' }}>Priya supports international students through the visa and application process.</p>
                        <button className="email-btn">EMAIL PRIYA</button>
                    </div>
                </div>
            </div>
            {/* Meet Our Admissions Counselors section end */}

            {/* Footer Start */}
            <footer className="footer">
                <div className="footer-container">
                    <div className="footer-column">
                        <h4>About</h4>
                        <p>Our university is committed to academic excellence and student success.</p>
                    </div>
                    <div className="footer-column">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Contact Info</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div className="footer-column">
                        <h4>Campus Address</h4>
                        <p>Pyinnyar Panknin University , Myanaung, Ayeyarwaddy Myanmar</p>
                    </div>
                    <div className="footer-column">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3788.744135976519!2d95.32630067464636!3d18.26754727685533!2m3!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c74149ab560691%3A0x8e3ab8b6a14524f7!2sPyinnyar%20Pankhin%20English%20Training%20Center!5e0!3m2!1sen!2smm!4v1748075909563!5m2!1sen!2smm" width="100%" height="100%" style={{ borderRadius: '10px' }} allowFullScreen loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </footer>
            {/* Footer End */}
        </>
    );
}
