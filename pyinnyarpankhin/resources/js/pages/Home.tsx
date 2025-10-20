import { Head } from '@inertiajs/react';
import { useState } from 'react';

interface NewsItem {
    id: number;
    title: string;
    content: string;
    published_date: string;
}

interface EventItem {
    id: number;
    title: string;
    event_date: string;
    location: string;
}

export default function Home({ news, events }: { news: NewsItem[], events: EventItem[] }) {
    const [email, setEmail] = useState('');

    return (
        <>
            <Head title="Home - Pyinnyar Pankhin University" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
            <link rel="stylesheet" href="/assets/css/style.css" />
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

            {/* Navbar */}
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
                                <a className="nav-link active" aria-current="page" href="./index.html">Home</a>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <a className="nav-link active" href="./Frontend/academics.html">Academics</a>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <a className="nav-link active" href="./Frontend/department.html">Department</a>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <a className="nav-link active" href="./Frontend/admissions.html">Admissions</a>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <a className="nav-link active" href="./Frontend/library.html">Library</a>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <a className="nav-link active" href="./Frontend/about.html">About</a>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <a className="nav-link active" href="./Frontend/event.html">Events</a>
                            </li>
                            <li className="nav-item menu" style={{ marginRight: '50px' }}>
                                <a className="nav-link active" href="./Frontend/contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            {/* hero section start */}
            <section className="hero-section">
                <div className="container">
                    <div className="intro-text">
                        <p className="lead-1" style={{ fontSize: 'xx-large' }}>To provide each student with the knowledge and skills to reach their individual potential to make positive contributions to Myanmar and the world wide</p>
                        <p className="lead-2" style={{ fontSize: 'x-large' }}>Explore our programs, research, and vibrant student life.</p>
                    </div>
                    <button className="btn1">🎓 Apply Now</button>
                    <button className="btn2">📚 Explore Programs</button>
                </div>
            </section>
            {/* hero section end */}

            {/* Section 2 start */}
            <section className="section-2 mt-5">
                <div className="container">
                    <h2 style={{ color: '#6C3428' }}>Latest News & Announcements</h2>
                    <div className="announcement-container">
                        {news.map((item) => (
                            <div key={item.id} className="box">
                                <h5 style={{ color: '#FF7300' }}>{item.title}</h5>
                                <p>{item.content.substring(0, 100)}...</p>
                                <small>{item.published_date}</small>
                            </div>
                        ))}
                        {news.length === 0 && (
                            <>
                                <div className="box">Admissions Open for 2025</div>
                                <div className="box">Library System Updated</div>
                                <div className="box">Upcoming Convocation Ceremony</div>
                            </>
                        )}
                    </div>
                </div>
            </section>
            {/* Section 2 end */}

            {/* Section 3 start */}
            <section className="section-3 text-center">
                <div className=" mx-auto">
                    <img src="/assets/images/Person 1.jpg" className="person" alt="#" />
                    <h3 className="mt-3" style={{ color: '#6C3428' }}>Welcome from the President</h3>
                    <p className="mt-2">At our university, we are committed to academic excellence, innovation, and cultivating leaders of tomorrow.</p>
                </div>
            </section>
            {/* Section 3 end */}

            {/* Section cart start */}
            <div className="section-cart text-center">
                <div className="sc-cart">📖 Academics</div>
                <div className="sc-cart">🏫 Departments</div>
                <div className="sc-cart">📚 Library</div>
                <div className="sc-cart">📝 Admissions</div>
                <div className="sc-cart">🎉 Events</div>
                <div className="sc-cart">🧑‍🏫 Faculty</div>
            </div>
            {/* Section cart end  */}

            {/* Featured Programs start */}
            <section className="featured-programs container mt-5">
                <div className="d-flex align-items-center mb-4">
                    <h3 style={{ color: '#6C3428', marginRight: '20px' }}>Featured Programs</h3>
                </div>

                <div className="d-flex flex-wrap justify-content-center gap-4">
                    <div className="card" style={{ width: '400px', border: '1px solid #6C3428', borderRadius: '10px' }}>
                        <img src="/assets/images/Computer Science students.webp" className="card-img-top" alt="Computer Science" />
                        <div className="card-body">
                            <h5 className="card-title" style={{ color: '#FF7300' }}>Computer Science</h5>
                            <p className="card-text" style={{ color: '#6C3428' }}>Discover the world of software, AI, and data science with our hands-on learning experience.</p>
                        </div>
                    </div>

                    <div className="card" style={{ width: '400px', border: '1px solid #6C3428', borderRadius: '10px' }}>
                        <img src="/assets/images/Psychology students.webp" className="card-img-top" alt="Psychology" />
                        <div className="card-body">
                            <h5 className="card-title" style={{ color: '#FF7300' }}>Psychology</h5>
                            <p className="card-text" style={{ color: '#6C3428' }}>Advance your understanding of human behavior through cutting-edge psychological research and expert faculty guidance.</p>
                        </div>
                    </div>

                    <div className="card" style={{ width: '400px', border: '1px solid #6C3428', borderRadius: '10px' }}>
                        <img src="/assets/images/Business Administration students.jpg" className="card-img-top" alt="Business Administration" />
                        <div className="card-body">
                            <h5 className="card-title" style={{ color: '#FF7300' }}>Business Administration</h5>
                            <p className="card-text" style={{ color: '#6C3428' }}>Develop strategic thinking and leadership skills for a successful business career.</p>
                        </div>
                    </div>
                </div>
            </section>
            {/* Featured Programs end */}

            {/* Student Life & Testimonials Start */}
            <section className="container my-5">
                <h3 className="text-center mb-4" style={{ color: '#6C3428', fontWeight: 'bold' }}>
                    Student Life & Testimonials
                </h3>

                <div className="d-flex flex-wrap justify-content-center gap-4">
                    <div className="testimonial-box">
                        <p className="quote">"My experience here has been life-changing. I gained knowledge and lifelong friends."</p>
                        <p className="author" style={{ color: '#6C3428' }}>– Aye Chan, Class of 2024</p>
                    </div>

                    <div className="testimonial-box">
                        <p className="quote">"Supportive faculty and exciting campus life made learning enjoyable every day."</p>
                        <p className="author" style={{ color: '#6C3428' }}>– Ko Ko, Alumni</p>
                    </div>
                </div>
            </section>
            {/* Student Life & Testimonials End */}

            {/* Upcoming Events start */}
            <section className="upcoming-events">
                <div className="events-container">
                    <h2 className="events-title">Upcoming Events</h2>
                    <div className="events-grid">
                        {events.map((event) => (
                            <div key={event.id} className="event-card">
                                <h4>{event.event_date}</h4>
                                <p>{event.title}</p>
                                <small>{event.location}</small>
                            </div>
                        ))}
                        {events.length === 0 && (
                            <>
                                <div className="event-card">
                                    <h4>April 12, 2025</h4>
                                    <p>Convocation Ceremony</p>
                                </div>
                                <div className="event-card">
                                    <h4>May 3, 2025</h4>
                                    <p>Science Expo</p>
                                </div>
                                <div className="event-card">
                                    <h4>June 10, 2025</h4>
                                    <p>Open Campus Day</p>
                                </div>
                            </>
                        )}
                    </div>
                    <div className="view-all">
                        <button className="view-button">View All Events</button>
                    </div>
                </div>
            </section>
            {/* Upcoming Events end */}

            {/* Stats Section Start */}
            <section className="stats-section">
                <div className="stats-container">
                    <div className="stat-box">
                        <h3 className="stat-number">10,000+</h3>
                        <p>Graduates</p>
                    </div>
                    <div className="stat-box">
                        <h3 className="stat-number">50+</h3>
                        <p>Departments</p>
                    </div>
                    <div className="stat-box">
                        <h3 className="stat-number">30+</h3>
                        <p>Years of Excellence</p>
                    </div>
                </div>
            </section>
            {/* Stats Section End */}

            {/* Subscribe Section Start */}
            <section className="subscribe-section">
                <h2 className="subscribe-title">Stay Updated</h2>
                <div className="subscribe-container">
                    <input type="email" placeholder="Enter your email" className="subscribe-input" value={email} onChange={(e) => setEmail(e.target.value)} required />
                    <button type="submit" className="subscribe-button">Subscribe</button>
                </div>
            </section>
            {/* Subscribe Section End */}

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
        </>
    );
}
