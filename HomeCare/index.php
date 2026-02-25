<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Sri Radha Krishna Home Care · Trusted Caregivers Hyderabad</title>
    <!-- modern font: Inter (sans) and Fallback -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- favicon: heart emoji as svg (works in all modern browsers) -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>❤️</text></svg>">
    <style>
        /* RESET & GLOBAL */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: #ffffff;
            color: #1e293b;
            line-height: 1.5;
            scroll-behavior: smooth;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* typography */
        h1, h2, h3 {
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #0f3b3a;
        }

        .section-subhead {
            font-size: 1.25rem;
            color: #475569;
            max-width: 700px;
            margin-bottom: 3rem;
        }

        /* buttons */
        .btn-primary, .btn-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 32px;
            border-radius: 60px;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.2s ease;
            border: 2px solid transparent;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #0f766e;
            color: white;
            box-shadow: 0 8px 16px -6px rgba(7, 94, 84, 0.3);
        }
        .btn-primary:hover {
            background-color: #0a5c55;
            transform: translateY(-2px);
            box-shadow: 0 12px 20px -8px #0f766e;
        }

        .btn-secondary {
            background-color: transparent;
            color: #0f3b3a;
            border-color: #0f766e;
        }
        .btn-secondary:hover {
            background-color: #f0f9f8;
            transform: translateY(-2px);
        }

        /* sticky navbar */
        .navbar {
            position: sticky;
            top: 0;
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            z-index: 1000;
            border-bottom: 1px solid #e2e8f0;
        }

        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 24px;
            max-width: 1280px;
            margin: 0 auto;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        .logo-icon {
            background: #0f766e;
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            box-shadow: 0 6px 12px rgba(7, 94, 84, 0.2);
        }
        .logo-text {
            font-weight: 700;
            font-size: 1.5rem;
            color: #0f3b3a;
            letter-spacing: -0.01em;
        }
        .logo-text span {
            font-weight: 400;
            color: #5b6b6a;
            font-size: 1rem;
            display: block;
            line-height: 1.2;
        }

        .nav-links {
            display: flex;
            gap: 32px;
            align-items: center;
        }
        .nav-links a {
            text-decoration: none;
            color: #1e293b;
            font-weight: 500;
            transition: color 0.2s;
        }
        .nav-links a:hover {
            color: #0f766e;
        }
        .nav-links .btn-small {
            background: #0f766e;
            color: white;
            padding: 8px 20px;
            border-radius: 40px;
            font-weight: 600;
        }

        /* hero */
        .hero {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            padding: 60px 24px 80px;
            position: relative;
        }
        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 60px;
            background: linear-gradient(to top, white, transparent);
        }
        .hero-grid {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
        }
        .hero-content {
            flex: 1 1 500px;
        }
        .hero-content h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            color: #0f3b3a;
            margin-bottom: 1.5rem;
        }
        .hero-content p {
            font-size: 1.25rem;
            color: #334155;
            margin-bottom: 2.5rem;
            max-width: 550px;
        }
        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 40px;
        }
        .trust-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            align-items: center;
        }
        .trust-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #2d4a48;
            font-weight: 500;
        }
        .trust-item i {
            color: #0f766e;
            font-size: 1.3rem;
        }

        .hero-image {
            flex: 1 1 300px;
            background: url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&auto=format&fit=crop') center/cover;
            min-height: 300px;
            border-radius: 40px;
            box-shadow: 0 40px 40px -20px rgba(0,0,0,0.25);
        }

        /* about section */
        .about-section {
            background: white;
            border-radius: 48px;
            padding: 60px;
            margin: 80px 0;
            box-shadow: 0 20px 40px -12px #d9e2e8;
            border: 1px solid #e9edf2;
        }
        .about-section h2 {
            font-size: 2.8rem;
            color: #0f3b3a;
        }
        .about-section p {
            font-size: 1.2rem;
            color: #334155;
            max-width: 850px;
            margin-bottom: 24px;
        }

        /* services grid */
        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }
        .service-card {
            background: white;
            border-radius: 30px;
            box-shadow: 0 16px 32px -12px rgba(0, 80, 70, 0.12);
            overflow: hidden;
            transition: transform 0.25s ease, box-shadow 0.3s;
            border: 1px solid #f0f4f9;
        }
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 40px -16px #115e59;
        }
        .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-content {
            padding: 24px;
        }
        .card-content h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #0f3b3a;
        }

        /* testimonials */
        .testimonials {
            background: #f1f5f9;
            padding: 80px 0;
            margin: 80px 0;
            border-radius: 80px 80px 0 0;
        }
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        .testimonial-card {
            background: white;
            border-radius: 32px;
            padding: 32px;
            box-shadow: 0 16px 24px -8px #b9c9d4;
        }
        .testimonial-card p {
            font-style: italic;
            color: #1e293b;
            margin: 20px 0;
        }
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .author-img {
            width: 52px;
            height: 52px;
            border-radius: 100px;
            object-fit: cover;
            background: #cbd5e1;
        }
        .author-info strong {
            color: #0f3b3a;
        }

        /* booking form */
        .form-section {
            background: white;
            border-radius: 48px;
            padding: 60px;
            box-shadow: 0 30px 40px -20px #64748b;
            margin: 80px 0;
        }
        .booking-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        .form-group label {
            font-weight: 600;
            margin-bottom: 6px;
            color: #115e59;
        }
        .form-group input, .form-group select, .form-group textarea {
            padding: 14px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 40px;
            font-size: 1rem;
            transition: border 0.2s;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            border-color: #0f766e;
            outline: none;
        }
        .full-width {
            grid-column: span 2;
        }
        .notification {
            background: #d1fae5;
            color: #065f46;
            padding: 20px;
            border-radius: 60px;
            margin-top: 30px;
            display: none;
            align-items: center;
            gap: 10px;
        }

        /* footer */
        .footer {
            background: #0b2b29;
            color: #d1d5db;
            padding: 60px 0 0;
            margin-top: 80px;
        }
        .footer-grid {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
        }
        .footer-col p {
            margin: 16px 0;
            line-height: 1.6;
        }
        .footer-col ul {
            list-style: none;
        }
        .footer-col li {
            margin-bottom: 12px;
        }
        .footer-col a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer-col a:hover {
            color: white;
        }
        .social-links {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .social-links a {
            background: #1f4e4a;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.4rem;
            transition: background 0.2s;
        }
        .social-links a:hover {
            background: #0f766e;
        }
        .footer-bottom {
            background: #052220;
            text-align: center;
            padding: 24px;
            margin-top: 40px;
            color: #9ca3af;
        }

        /* floating action buttons (original) */
        .sticky-actions {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 999;
        }
        .float-wa, .float-call {
            width: 60px;
            height: 60px;
            border-radius: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            box-shadow: 0 8px 16px rgba(0,0,0,0.25);
            transition: transform 0.2s;
            text-decoration: none;
        }
        .float-wa { background: #25D366; }
        .float-call { background: #2563eb; }
        .float-wa:hover, .float-call:hover { transform: scale(1.1); }

        /* responsive */
        @media (max-width: 800px) {
            h2 { font-size: 2rem; }
            .hero-content h1 { font-size: 2.8rem; }
            .nav-links { display: none; }  /* mobile menu hidden for simplicity, could be added */
            .booking-form { grid-template-columns: 1fr; }
            .full-width { grid-column: span 1; }
            .about-section { padding: 30px; }
            .form-section { padding: 30px; }
        }
    </style>
</head>
<body>
    <!-- sticky navbar with logo -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo-area">
                <div class="logo-icon"><i class="fas fa-heart"></i></div>
                <div class="logo-text">SRK Home Care<span>since 2023</span></div>
            </a>
            <div class="nav-links">
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#testimonials">Testimonials</a>
                <a href="#booking">Book</a>
                <a href="#contact">Contact</a>
                <a href="tel:9491423122" class="btn-small"><i class="fas fa-phone-alt"></i> Call</a>
            </div>
        </div>
    </nav>

    <!-- hero banner -->
    <section class="hero">
        <div class="hero-grid">
            <div class="hero-content">
                <h1>Professional home care, rooted in compassion</h1>
                <p>Trusted by 500+ families in New Nagole, Hyderabad. We bring dignity and expert care to your loved ones.</p>
                <div class="hero-buttons">
                    <a href="#booking" class="btn-primary"><i class="fas fa-calendar-check"></i> Book consultation</a>
                    <a href="#services" class="btn-secondary">Our services</a>
                </div>
                <div class="trust-badges">
                    <span class="trust-item"><i class="fas fa-user-shield"></i> 500+ families</span>
                    <span class="trust-item"><i class="fas fa-clock"></i> 24/7 support</span>
                    <span class="trust-item"><i class="fas fa-id-card"></i> Trained caregivers</span>
                </div>
            </div>
            <div class="hero-image"></div>
        </div>
    </section>

    <!-- about section (exact text) -->
    <div class="container" id="about">
        <div class="about-section">
            <h2><i class="fas fa-heart" style="color:#0f766e; margin-right: 12px;"></i> Dedicated to Your Family's Well-being</h2>
            <p>At Sri Radha Krishna Home Care Service, we understand that finding the right care for your loved ones is a matter of trust. Located in New Nagole, Hyderabad, we are committed to providing high-quality, compassionate support tailored to your specific needs.</p>
            <p>Under the leadership of our Managing Director, <strong>Sridhar Kumar</strong>, our team of trained professionals ensures that every client receives the respect, dignity, and attention they deserve. Whether it's elderly support or newborn care, we are here to help.</p>
            <div style="margin-top: 24px; background: #ecfdf5; padding: 16px 32px; border-radius: 60px; display: inline-block; font-weight: 600;"><i class="fas fa-check-circle" style="color:#0f766e;"></i> 24/7 availability · Trained caregivers · Personalized plans</div>
        </div>
    </div>

    <!-- services with images -->
    <div class="container" id="services">
        <h2>Our care services</h2>
        <div class="service-grid">
            <div class="service-card">
                <img class="card-img" src="https://images.unsplash.com/photo-1584820927498-cfe5211fd8bf?w=400&auto=format&fit=crop" alt="Diaper change">
                <div class="card-content"><h3><i class="fas fa-child" style="color:#0f766e;"></i> Diaper change</h3><p>Respectful continence care for seniors and bedridden clients.</p></div>
            </div>
            <div class="service-card">
                <img class="card-img" src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=400&auto=format&fit=crop" alt="Housekeeping">
                <div class="card-content"><h3><i class="fas fa-broom"></i> Housekeeping</h3><p>Light housekeeping, disinfection, and neat living spaces.</p></div>
            </div>
            <div class="service-card">
                <img class="card-img" src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?w=400&auto=format&fit=crop" alt="Cooking">
                <div class="card-content"><h3><i class="fas fa-utensils"></i> Cooking</h3><p>Nutritious meals according to dietary needs.</p></div>
            </div>
            <div class="service-card">
                <img class="card-img" src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?w=400&auto=format&fit=crop" alt="Nursing">
                <div class="card-content"><h3><i class="fas fa-user-nurse"></i> Nursing</h3><p>Medication reminders, vitals, post-operative support.</p></div>
            </div>
            <div class="service-card">
                <img class="card-img" src="https://images.unsplash.com/photo-1555252333-9f8e92e65df9?w=400&auto=format&fit=crop" alt="Baby care">
                <div class="card-content"><h3><i class="fas fa-baby"></i> Baby care</h3><p>Nannies for newborn and infant care.</p></div>
            </div>
            <div class="service-card">
                <img class="card-img" src="images/elderly_services.jpg" alt="Elderly support">
                <div class="card-content"><h3><i class="fas fa-heart"></i> Elderly support</h3><p>Companionship, mobility aid, emotional support.</p></div>
            </div>
        </div>
    </div>

    <!-- testimonial section -->
    <div class="testimonials" id="testimonials">
        <div class="container">
            <h2>What families say</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <i class="fas fa-quote-left" style="color:#0f766e; font-size: 2rem;"></i>
                    <p>“Sridhar Kumar and his team took care of my mother like family. Professional, punctual, and truly kind.”</p>
                    <div class="testimonial-author">
                        <img class="author-img" src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                        <div class="author-info"><strong>Lakshmi Reddy</strong> <br> Kothapet</div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-left" style="color:#0f766e; font-size: 2rem;"></i>
                    <p>“The baby care service was excellent. Our newborn was in safe hands. Highly recommend!”</p>
                    <div class="testimonial-author">
                        <img class="author-img" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                        <div class="author-info"><strong>Ravi Teja</strong> <br> New Nagole</div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-left" style="color:#0f766e; font-size: 2rem;"></i>
                    <p>“They go above and beyond. Cooking, housekeeping, nursing — all delivered with a smile.”</p>
                    <div class="testimonial-author">
                        <img class="author-img" src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                        <div class="author-info"><strong>Sarita Devi</strong> <br> Vanasthalipuram</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- booking form (functional) -->
    <div class="container" id="booking">
        <div class="form-section">
            <h2><i class="fas fa-calendar-check" style="color:#0f766e;"></i> Request a caregiver</h2>
            <p style="font-size: 1.2rem; margin-bottom: 30px;">MD Sridhar Kumar will receive your booking instantly.</p>
            <form class="booking-form" id="serviceBookingForm">
                <div class="form-group"><label>Full name *</label><input type="text" id="fullName" placeholder="e.g. Rama Devi" required></div>
                <div class="form-group"><label>Phone *</label><input type="tel" id="phone" placeholder="9876543210" required></div>
                <div class="form-group"><label>Area / colony</label><input type="text" id="location" value="New Nagole"></div>
                <div class="form-group"><label>Preferred date</label><input type="date" id="prefDate"></div>
                <div class="form-group"><label>Select service *</label>
                    <select id="serviceType" required>
                        <option value="">--Choose--</option>
                        <option value="Diaper change">Diaper change</option>
                        <option value="Housekeeping">Housekeeping</option>
                        <option value="Cooking">Cooking</option>
                        <option value="Nursing">Nursing</option>
                        <option value="Baby care">Baby care</option>
                        <option value="Elderly support">Elderly support</option>
                    </select>
                </div>
                <div class="form-group full-width"><label>Additional notes</label><textarea id="notes" rows="3"></textarea></div>
                <div class="full-width" style="display: flex; justify-content: center;">
                    <button type="submit" class="btn-primary" style="border:none;"><i class="fas fa-paper-plane"></i> Send booking</button>
                </div>
            </form>
            <div id="liveNotification" class="notification"><i class="fas fa-check-circle"></i> <span id="notifMessage">MD has been notified (demo).</span></div>
        </div>
    </div>

    <!-- footer (full-width structured) -->
    <footer class="footer" id="contact">
        <div class="footer-grid">
            <div class="footer-col">
                <div class="logo-area" style="margin-bottom: 16px;">
                    <div class="logo-icon" style="background:#1f4e4a;"><i class="fas fa-heart"></i></div>
                    <span class="logo-text" style="color:white;">SRK Home Care</span>
                </div>
                <p>Compassion, dignity and professional care since 2023. Trusted by families across Hyderabad.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4 style="color:white;">Services</h4>
                <ul>
                    <li><a href="#">Diaper change</a></li>
                    <li><a href="#">Housekeeping</a></li>
                    <li><a href="#">Cooking</a></li>
                    <li><a href="#">Nursing</a></li>
                    <li><a href="#">Baby care</a></li>
                    <li><a href="#">Elderly support</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 style="color:white;">Quick links</h4>
                <ul>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#booking">Book now</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Terms of use</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 style="color:white;">Contact</h4>
                <p><i class="fas fa-map-marker-alt" style="color:#fcd34d;"></i> New Nagole, Hyderabad</p>
                <p><i class="fas fa-phone-alt"></i> <a href="tel:9491423122">9491423122</a> (MD Sridhar)</p>
                <p><i class="fas fa-envelope"></i> <a href="mailto:care@srkhomecare.in">care@srkhomecare.in</a></p>
                <p><i class="fab fa-whatsapp"></i> <a href="https://wa.me/919491423122">WhatsApp direct</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            © 2025 Sri Radha Krishna Home Care Service · All rights reserved. Designed with trust.
        </div>
    </footer>

    <!-- floating WhatsApp & call (always visible) -->
    <div class="sticky-actions">
        <a href="https://wa.me/919491423122" class="float-wa" target="_blank" title="WhatsApp MD"><i class="fab fa-whatsapp"></i></a>
        <a href="tel:9491423122" class="float-call" title="Call MD"><i class="fas fa-phone-alt"></i></a>
    </div>

    <script>
        (function() {
            const form = document.getElementById('serviceBookingForm');
            const notificationDiv = document.getElementById('liveNotification');
            const notifSpan = document.getElementById('notifMessage');
            notificationDiv.style.display = 'none';

            document.getElementById('prefDate').value = new Date().toISOString().split('T')[0];

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const name = document.getElementById('fullName').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const service = document.getElementById('serviceType').value;
                if (!name || !phone || !service) {
                    alert('Please fill required fields');
                    return;
                }
                notifSpan.innerText = `📲 MD Sridhar Kumar notified! Booking from ${name} for ${service}.`;
                notificationDiv.style.display = 'flex';
                console.log('Booking request sent to MD (simulated)');
            });
        })();
    </script>
</body>
</html>