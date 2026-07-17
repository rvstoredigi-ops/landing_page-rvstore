<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RVStore - Coffee Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #FAF6F0; /* Light cream background */
            --text-dark: #3E3128; /* Dark brown text */
            --accent-color: #92836E; /* Muted brown/olive for buttons */
            --line-color: #D5CDC4; /* Color for dividers */
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Lato', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-dark);
            font-family: var(--font-body);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 5%;
        }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            background-color: var(--bg-color);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-family: var(--font-heading);
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--text-dark);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--accent-color);
        }

        .btn {
            background-color: var(--accent-color);
            color: #FFF;
            padding: 0.7rem 1.5rem;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background-color: #7A6C58;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 60vh;
            min-height: 400px;
            margin: 0 5% 4rem 5%;
            background: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1920&q=80') right center/cover no-repeat;
            display: flex;
            align-items: center;
            padding-left: 5%;
        }

        .hero::after {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.2); /* Slight dark overlay for readability */
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: #FFF;
            max-width: 400px;
        }

        .hero h1 {
            font-family: var(--font-heading);
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }

        /* Section Dividers */
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 4rem 5% 3rem 5%;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid var(--line-color);
        }

        .divider span {
            padding: 0 1.5rem;
            font-family: var(--font-heading);
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        /* Zigzag Content (About Us / Menu) */
        .zigzag-row {
            display: flex;
            align-items: center;
            gap: 4rem;
            margin: 0 5% 4rem 5%;
        }

        .zigzag-row.reverse {
            flex-direction: row-reverse;
        }

        .zigzag-img {
            flex: 1;
        }

        .zigzag-img img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }

        .zigzag-text {
            flex: 1;
        }

        .zigzag-text h3 {
            font-family: var(--font-heading);
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .zigzag-text p {
            font-size: 0.95rem;
            color: #554A42;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        /* Store Locations */
        .locations-container {
            display: flex;
            gap: 2rem;
            margin: 0 5% 4rem 5%;
            background: #F1EBE3;
            padding: 2rem;
        }

        .location-img {
            flex: 1;
        }

        .location-img img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .location-map {
            flex: 1;
            background: #E8E1D7;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        
        .location-map img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            opacity: 0.8;
        }

        /* Footer / Reviews / Contact */
        .footer-section {
            display: flex;
            gap: 4rem;
            margin: 0 5% 4rem 5%;
            padding-top: 1rem;
        }

        .footer-left {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background: var(--line-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-info h4 {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
        }

        .contact-info p {
            font-size: 0.85rem;
            color: #666;
        }

        .footer-right {
            flex: 1;
            background: transparent;
        }

        .footer-right h3 {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid var(--line-color);
            background: transparent;
            font-family: var(--font-body);
            color: var(--text-dark);
        }
        
        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: var(--accent-color);
        }

        .contact-form textarea {
            height: 100px;
            resize: none;
        }

        .contact-form .btn {
            width: 100%;
            padding: 1rem;
            font-size: 1rem;
        }
        
        .hidden-mobile {
            display: inline-block;
        }

        /* Mobile Hamburger */
        .hamburger {
            display: none;
            cursor: pointer;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .hidden-mobile {
                display: none !important;
            }
            .zigzag-row, .zigzag-row.reverse, .locations-container, .footer-section {
                flex-direction: column;
                gap: 2rem;
            }
            .hero {
                margin: 0 0 3rem 0;
                height: 50vh;
                justify-content: center;
                text-align: center;
                padding: 0 5%;
            }
            .hero h1 { font-size: 2.5rem; }
            .hamburger {
                display: block;
            }
            .nav-links {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 70px;
                right: 5%;
                width: 200px;
                background: var(--bg-color);
                padding: 1.5rem;
                gap: 1.5rem;
                text-align: center;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(62, 49, 40, 0.2);
                z-index: 100;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-15px);
                transition: all 0.3s ease;
                border: 1px solid var(--line-color);
            }
            .nav-links.active {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }
            .footer-left {
                grid-template-columns: 1fr;
            }
            .locations-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">RVStore</div>
        <div class="nav-links" id="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#menu">Coffee Menu</a>
            <a href="#locations">Store Locations</a>
            <a href="#reviews">Customer Reviews</a>
        </div>
        <button class="btn hidden-mobile" style="margin-left: 2rem;">Contact Us</button>
        
        <div class="hamburger" id="hamburger">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </div>
    </nav>

    <header class="hero" id="home">
        <div class="hero-content">
            <h1>Warm Brews,<br>Cozy Spaces</h1>
            <a href="#locations" class="btn">Book a Table</a>
        </div>
    </header>

    <!-- About Us Section -->
    <div class="divider" id="about"><span>About Us</span></div>
    
    <section class="zigzag-row">
        <div class="zigzag-img">
            <img src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?auto=format&fit=crop&w=800&q=80" alt="Coffee Brewing">
        </div>
        <div class="zigzag-text">
            <h3>Coffee Menu</h3>
            <p>Experience the rich, bold flavors of our freshly roasted coffee beans. We source only the finest arabica beans from sustainable farms around the world to ensure every cup delivers an unforgettable taste.</p>
            <p>Our skilled baristas craft each beverage with precision and care, whether you prefer a classic espresso or a creamy latte.</p>
        </div>
    </section>

    <!-- Coffee Menu Section -->
    <section class="zigzag-row reverse" id="menu">
        <div class="zigzag-img">
            <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=800&q=80" alt="Coffee Cup">
        </div>
        <div class="zigzag-text">
            <h3>Coffee Menu</h3>
            <p>Indulge in our selection of artisanal pastries and savory bites, perfectly paired with your favorite coffee. From flaky croissants to decadent chocolate cakes, there's something to satisfy every craving.</p>
            <p>Join us in our welcoming space, designed to be your home away from home. Sit back, relax, and savor the moment.</p>
        </div>
    </section>

    <!-- Store Locations Section -->
    <div class="divider" id="locations"><span>Store Locations</span></div>
    
    <section class="locations-container">
        <div class="location-img">
            <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?auto=format&fit=crop&w=800&q=80" alt="Store Interior">
        </div>
        <div class="location-map">
            <!-- Placeholder for map -->
            <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&w=800&q=80" alt="Map Location" style="filter: grayscale(80%) sepia(30%);">
        </div>
    </section>

    <!-- Customer Reviews / Footer Contact -->
    <div class="divider" id="reviews"><span>Customer Reviews</span></div>
    
    <section class="footer-section">
        <div class="footer-left">
            <div>
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-info">
                        <h4>Contact Us</h4>
                        <p>123 Coffee Street, Brew City</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div class="contact-info">
                        <h4>Phone</h4>
                        <p>+1 234 567 890</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div class="contact-info">
                        <h4>Email</h4>
                        <p>hello@rvstore.com</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="contact-item">
                    <div class="contact-icon">⭐</div>
                    <div class="contact-info">
                        <h4>Customer Reviews</h4>
                        <p>"Best coffee in town!" - Sarah M.</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📸</div>
                    <div class="contact-info">
                        <h4>Follow Us</h4>
                        <p>@rvstore</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-right">
            <h3>Contact Us</h3>
            <form class="contact-form">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Email Address" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Contact Us</button>
            </form>
        </div>
    </section>

    <script>
        // Hamburger Menu Toggle
        document.getElementById('hamburger').addEventListener('click', function() {
            document.getElementById('nav-links').classList.toggle('active');
        });

        // Close menu on link click
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('nav-links').classList.remove('active');
            });
        });
    </script>
</body>
</html>
