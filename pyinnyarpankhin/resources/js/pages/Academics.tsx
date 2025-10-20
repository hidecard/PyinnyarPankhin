import { Head } from '@inertiajs/react';

export default function Academics() {
    return (
        <>
            <Head title="Academics - Pyinnyar Pankhin University" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
            <link rel="stylesheet" href="/assets/css/style.css" />

            {/* Navbar */}
            <nav className="navbar navbar-expand-lg bg-white border-bottom border-warning">
                <div className="container-fluid">
                    <img src="/assets/images/logo.png" alt="Logo" style={{ width: '50px', height: '50px' }} />
                    <a className="navbar-brand ms-3 fw-bold text-warning" href="/">
                        Pyinnyar Pankhin <br /> University
                    </a>
                    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span className="navbar-toggler-icon"></span>
                    </button>
                    <div className="collapse navbar-collapse" id="navbarNav">
                        <ul className="navbar-nav ms-5">
                            <li className="nav-item me-4">
                                <a className="nav-link" href="/">Home</a>
                            </li>
                            <li className="nav-item me-4">
                                <a className="nav-link active" href="/academics">Academics</a>
                            </li>
                            <li className="nav-item me-4">
                                <a className="nav-link" href="/department">Department</a>
                            </li>
                            <li className="nav-item me-4">
                                <a className="nav-link" href="/admissions">Admissions</a>
                            </li>
                            <li className="nav-item me-4">
                                <a className="nav-link" href="/library">Library</a>
                            </li>
                            <li className="nav-item me-4">
                                <a className="nav-link" href="/about">About</a>
                            </li>
                            <li className="nav-item me-4">
                                <a className="nav-link" href="/events">Events</a>
                            </li>
                            <li className="nav-item me-4">
                                <a className="nav-link" href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            {/* Hero Section */}
            <section className="hero-section-academics py-5 bg-light">
                <div className="container">
                    <div className="intro-text text-center">
                        <p className="lead display-4 mb-3 text-warning">
                            Empowering Minds, Shaping Futures
                        </p>
                        <p className="lead fs-3 mb-4 text-secondary">
                            Welcome to our vibrant academic community where excellence in teaching, learning, and research comes together to create transformative educational experiences.
                        </p>
                    </div>
                    <div className="text-center">
                        <button className="btn btn-warning px-4 py-2">Explore Programs</button>
                    </div>
                </div>
            </section>

            {/* Programs Offered */}
            <section className="py-5">
                <div className="container">
                    <h2 className="text-center mb-4 text-warning">Programs Offered</h2>

                    {/* Undergraduate Degrees */}
                    <div className="mb-5">
                        <h2 className="fw-bold text-warning mb-4">Undergraduate Degrees</h2>
                        <div className="table-responsive">
                            <table className="table table-bordered align-middle">
                                <thead className="table-dark">
                                    <tr>
                                        <th scope="col">Program Name</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Bachelor of Science (BSc)</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>4 years</td>
                                        <td className="fw-bold text-warning">View Specializations</td>
                                    </tr>
                                    <tr>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Bachelor of Arts (BA)</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>3 years</td>
                                        <td className="fw-bold text-warning">View Majors</td>
                                    </tr>
                                    <tr>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Bachelor of Engineering (BEng)</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>4 years</td>
                                        <td className="fw-bold text-warning">Engineering Disciplines</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {/* Master's Degrees */}
                    <div className="mb-5">
                        <h2 className="fw-bold text-warning mb-4">Master's Degrees</h2>
                        <div className="table-responsive">
                            <table className="table table-bordered align-middle">
                                <thead className="table-dark">
                                    <tr>
                                        <th scope="col">Program Name</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Format</th>
                                        <th scope="col">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Master of Business Administration (MBA)</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>2 years</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Full–time/Part–time</td>
                                        <td className="fw-bold text-warning">Concentrations</td>
                                    </tr>
                                    <tr>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Master of Science (MSc)</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>1.5–2 years</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Thesis/Coursework</td>
                                        <td className="fw-bold text-warning">Research Areas</td>
                                    </tr>
                                    <tr>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Master of Engineering (MEng)</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>2 years</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Project-based</td>
                                        <td className="fw-bold text-warning">Industry Links</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {/* Doctoral Degrees */}
                    <div>
                        <h2 className="fw-bold text-warning mb-4">Doctoral Degrees (PhD)</h2>
                        <div className="table-responsive">
                            <table className="table table-bordered align-middle">
                                <thead className="table-dark">
                                    <tr>
                                        <th scope="col">Program Name</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Format</th>
                                        <th scope="col">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>PhD in Sciences</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>3–5 years</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Laboratory Research</td>
                                        <td className="fw-bold text-warning">Faculty Supervisors</td>
                                    </tr>
                                    <tr>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>PhD in Humanities</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>4–6 years</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Theoretical Research</td>
                                        <td className="fw-bold text-warning">Department Info</td>
                                    </tr>
                                    <tr>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Professional Doctorates</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>3–4 years</td>
                                        <td className="fw-bold" style={{ color: '#6C3428' }}>Applied Research</td>
                                        <td className="fw-bold text-warning">Case Studies</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            {/* Academic Resources */}
            <section className="py-5 bg-light">
                <div className="container">
                    <h2 style={{ color: '#6C3428' }}>Academic Resources</h2>
                    <p style={{ color: '#6C3428' }}>Essential resources to support your academic journey.</p>

                    <div className="row g-4 mt-4">
                        <div className="col-md-6 col-lg-3">
                            <div className="card h-100 border-warning">
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>Course Catalog</h4>
                                    <p style={{ color: '#6C3428' }}>Complete listing of all courses offered across all programs and faculties.</p>
                                    <a href="#" className="text-warning text-decoration-none">Access Catalog →</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6 col-lg-3">
                            <div className="card h-100 border-warning">
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>Academic Calendar</h4>
                                    <p style={{ color: '#6C3428' }}>Important dates, deadlines, and events for the current academic year.</p>
                                    <a href="#" className="text-warning text-decoration-none">View Calendar →</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6 col-lg-3">
                            <div className="card h-100 border-warning">
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>Examination Info</h4>
                                    <p style={{ color: '#6C3428' }}>Schedules, policies, and resources for midterm and final examinations.</p>
                                    <a href="#" className="text-warning text-decoration-none">Learn More →</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6 col-lg-3">
                            <div className="card h-100 border-warning">
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>Scholarships & Financial Aid</h4>
                                    <p style={{ color: '#6C3428' }}>Information about funding opportunities, grants, and financial support.</p>
                                    <a href="#" className="text-warning text-decoration-none">Explore Options →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Student Support & Guidance */}
            <section className="py-5">
                <div className="container">
                    <h2 style={{ color: '#6C3428' }}>Student Support & Guidance</h2>
                    <p style={{ color: '#6C3428' }}>We provide comprehensive support services to help you succeed in your academic journey.</p>

                    <div className="row g-4 mt-4">
                        <div className="col-md-4">
                            <div className="card h-100 border-warning">
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>Academic Advising</h4>
                                    <p style={{ color: '#6C3428' }}>Personalized guidance on course selection, degree requirements, and academic planning.</p>
                                    <a href="#" className="text-warning text-decoration-none">Learn More →</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-4">
                            <div className="card h-100 border-warning">
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>Tutoring Services</h4>
                                    <p style={{ color: '#6C3428' }}>Free peer tutoring and academic support for challenging courses across all disciplines.</p>
                                    <a href="#" className="text-warning text-decoration-none">Find Help →</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-4">
                            <div className="card h-100 border-warning">
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>Career Guidance</h4>
                                    <p style={{ color: '#6C3428' }}>Career counseling, internship placement, and job search support services.</p>
                                    <a href="#" className="text-warning text-decoration-none">Explore Services →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Global Opportunities */}
            <section className="py-5 bg-light">
                <div className="container">
                    <h2 style={{ color: '#6C3428' }}>Global Opportunities</h2>
                    <p style={{ color: '#6C3428' }}>Expand your horizons through our international programs and partnerships.</p>

                    <div className="row g-4 mt-4">
                        <div className="col-md-6">
                            <div className="card h-100 border-warning">
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>Study Abroad</h4>
                                    <p style={{ color: '#6C3428' }}>Semester or year-long exchange programs with 100+ partner universities worldwide.</p>
                                    <a href="#" className="text-warning text-decoration-none">Explore Programs →</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6">
                            <div className="card h-100 border-warning">
                                <div className="card-body">
                                    <h4 style={{ color: '#6C3428' }}>International Partnerships</h4>
                                    <p style={{ color: '#6C3428' }}>Dual-degree programs and collaborative research opportunities with global institutions.</p>
                                    <a href="#" className="text-warning text-decoration-none">View Partners →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Resources & Downloads */}
            <section className="py-5">
                <div className="container">
                    <h2 style={{ color: '#6C3428' }}>Resources & Downloads</h2>
                    <p style={{ color: '#6C3428' }}>Access important documents and forms for your academic needs.</p>

                    <div className="row g-4 mt-4">
                        <div className="col-md-4">
                            <div className="d-flex align-items-center p-3 border rounded">
                                <div className="me-3 fs-2">📘</div>
                                <div>
                                    <h5 style={{ color: '#6C3428' }}>Course Brochures</h5>
                                    <a href="#" className="text-warning text-decoration-none">Download PDF →</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-4">
                            <div className="d-flex align-items-center p-3 border rounded">
                                <div className="me-3 fs-2">📅</div>
                                <div>
                                    <h5 style={{ color: '#6C3428' }}>Timetables</h5>
                                    <a href="#" className="text-warning text-decoration-none">Download →</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-4">
                            <div className="d-flex align-items-center p-3 border rounded">
                                <div className="me-3 fs-2">📝</div>
                                <div>
                                    <h5 style={{ color: '#6C3428' }}>Academic Policies</h5>
                                    <a href="#" className="text-warning text-decoration-none">View Handbook →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Footer */}
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3788.744135976519!2d95.32630067464636!3d18.26754727685533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c74149ab560691%3A0x8e3ab8b6a14524f7!2sPyinnyar%20Pankhin%20English%20Training%20Center!5e0!3m2!1sen!2smm!4v1748075909563!5m2!1sen!2smm" width="100%" height="100%" style={{ borderRadius: '10px' }} allowFullScreen loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
        </>
    );
}
