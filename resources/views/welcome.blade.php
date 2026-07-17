<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RVStore - Digital Promotion Agency</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #E8D3C3; /* Soft peach/beige background matching the reference */
            --text-dark: #31231E; /* Dark brown text */
            --text-light: #F5EAE1;
            --accent: #D29D7D; /* Soft copper/brown accent */
            --footer-bg: #1F1F1F; /* Dark footer */
            --card-bg: #DFBCAB; /* Slightly darker than bg for cards */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-dark);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            position: absolute;
            width: 100%;
            top: 0;
            z-index: 100;
            background: var(--bg-color);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .nav-links a {
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        .hamburger {
            display: none;
            cursor: pointer;
            color: var(--text-dark);
        }

        .nav-icons {
            display: flex;
            gap: 1rem;
        }

        /* Hero Section */
        .hero {
            position: relative;
            margin-top: 80px; /* offset for navbar */
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 0 10%;
            background: #181514 url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1920&q=80') right center / cover no-repeat;
            border-radius: 0 0 50% 50% / 0 0 15% 15%; /* Creates the curved bottom effect */
            overflow: hidden;
        }

        /* Dark overlay for hero */
        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 100%); 
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 10;
            max-width: 600px;
            color: #FFF;
        }

        .hero h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 1rem;
            font-weight: 300;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .hero h1 span {
            font-weight: 800;
            color: #DFBCAB; /* highlight color matching cards */
            display: block;
            font-size: 5rem;
        }

        .hero p {
            font-size: 1.2rem;
            color: #E8D3C3;
            margin-bottom: 2.5rem;
            line-height: 1.6;
        }

        .btn-white {
            background: #FFFFFF;
            color: var(--text-dark);
            padding: 0.8rem 2.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 800;
            font-size: 0.9rem;
            text-transform: uppercase;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-white:hover {
            background: var(--card-bg);
            transform: translateY(-2px);
        }

        /* Section Titles */
        .section-header {
            text-align: center;
            margin: 5rem 0 3rem 0;
        }

        .section-header h2 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-dark);
        }

        .section-header p {
            color: #635045;
            font-size: 1.1rem;
            font-weight: 600;
        }

        /* Services / Categories Section */
        .services {
            padding: 0 5%;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: #FFF;
            border-radius: 30px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 10px 20px rgba(49, 35, 30, 0.05);
            transition: transform 0.3s ease;
            height: 350px;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
            transition: filter 0.3s ease;
        }
        
        .service-card:hover img {
            filter: brightness(0.4);
        }

        .service-info {
            position: absolute;
            bottom: 30px;
            left: 0;
            width: 100%;
            text-align: center;
            color: #FFF;
        }

        .service-info h3 {
            font-size: 1.6rem;
            margin-bottom: 0.5rem;
        }

        .service-info span {
            font-size: 0.9rem;
            text-decoration: underline;
            text-underline-offset: 4px;
        }

        /* Showcase / Milk Shakes style */
        .showcase {
            padding: 0 5% 5rem 5%;
        }

        .showcase-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .showcase-item {
            background: var(--card-bg);
            border-radius: 30px;
            padding: 2rem;
            text-align: center;
            position: relative;
            transition: transform 0.3s ease;
        }
        
        .showcase-item:hover {
            transform: translateY(-5px);
        }

        .badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.5);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .showcase-img-wrap {
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }
        
        .showcase-img-wrap img {
            max-height: 100%;
            border-radius: 15px;
        }

        .showcase-item h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .price-row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            margin-top: 1rem;
        }
        
        .price {
            font-weight: 800;
            font-size: 1.2rem;
        }

        .btn-buy {
            background: var(--text-dark);
            color: #FFF;
            padding: 0.4rem 1.2rem;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* Footer */
        footer {
            background: var(--footer-bg);
            color: #A0A0A0;
            padding: 4rem 5% 2rem 5%;
            margin-top: 4rem;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .footer-col h4 {
            color: #FFF;
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }
        
        .footer-col ul {
            list-style: none;
        }
        
        .footer-col ul li {
            margin-bottom: 0.8rem;
        }
        
        .footer-col ul li a {
            color: #A0A0A0;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }
        
        .footer-col ul li a:hover {
            color: #FFF;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.85rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 1rem;
        }
        
        .footer-links-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .footer-link-item {
            color: #A0A0A0;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-link-item:hover {
            color: #FFF;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                min-height: 75vh;
                padding: 100px 5% 5% 5%;
                border-radius: 0 0 20% 20% / 0 0 5% 5%;
                justify-content: center;
                align-items: flex-start;
                text-align: center;
                background-position: center bottom !important;
            }
            .hero::before {
                background: linear-gradient(to bottom, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.1) 100%); 
            }
            .hero-content {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .hero h1 { font-size: 2.2rem; }
            .hero h1 span { font-size: 3rem; }
            .nav-icons { display: none; }
            .hamburger { 
                display: block; 
                position: relative;
                z-index: 105;
            }
            .nav-links {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 70px;
                right: 5%;
                width: 200px;
                height: auto;
                background: #F5EAE1; /* Slightly lighter/cleaner for dropdown */
                padding: 1.5rem;
                gap: 1.2rem;
                text-align: center;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(49, 35, 30, 0.15);
                z-index: 100;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-15px);
                transition: all 0.3s ease;
            }
            .nav-links.active {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }
            .section-header { margin: 3rem 0 2rem 0; }
            .section-header h2 { font-size: 1.8rem; }
            .services, .showcase { padding: 0 5% 3rem 5%; }
            .footer-bottom { gap: 1.5rem; }
            .footer-links-container { 
                display: flex; 
                flex-direction: row; 
                flex-wrap: wrap; 
                justify-content: center; 
                gap: 12px; 
            }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
            RVStore
        </div>
        <div class="nav-links" id="nav-links">
            <a href="#home">Home</a>
            <a href="#services">Menu</a>
            <a href="#portfolio">Blog</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="nav-icons">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </div>
        <div class="hamburger" id="hamburger">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Layanan Promosi<br><span>TERBAIK</span></h1>
            <p>Tingkatkan eksposur bisnis Cafe dan Resto Anda bersama agensi digital RVStore.</p>
            <a href="#services" class="btn-white">Konsultasi</a>
        </div>
    </section>

    <div class="section-header">
        <h2>TOP KATEGORI</h2>
        <p>Layanan Promosi Bisnis Paling Diminati</p>
    </div>

    <section class="services" id="services">
        <div class="services-grid">
            <div class="service-card">
                <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=800&q=80" alt="Sosmed">
                <div class="service-info">
                    <h3>Social Media</h3>
                    <span>View More</span>
                </div>
            </div>
            <div class="service-card">
                <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096?auto=format&fit=crop&w=800&q=80" alt="Ads">
                <div class="service-info">
                    <h3>Digital Ads</h3>
                    <span>View More</span>
                </div>
            </div>
            <div class="service-card">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Web">
                <div class="service-info">
                    <h3>Website Landing</h3>
                    <span>View More</span>
                </div>
            </div>
        </div>
    </section>

    <div class="section-header">
        <h2>KLIEN KAMI</h2>
        <p>Beberapa Brand Yang Bekerjasama</p>
    </div>

    <section class="showcase" id="portfolio">
        <div class="showcase-grid">
            <div class="showcase-item">
                <div class="badge">👍 99 Likes</div>
                <div class="showcase-img-wrap">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=400&q=80" alt="Kopi">
                </div>
                <h3>Senja Kopi</h3>
                <div class="price-row">
                    <span class="price">Rebranding</span>
                    <a href="#" class="btn-buy">Lihat</a>
                </div>
            </div>
            <div class="showcase-item">
                <div class="badge">👍 120 Likes</div>
                <div class="showcase-img-wrap">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=400&q=80" alt="Kopi">
                </div>
                <h3>Cafe Ruang</h3>
                <div class="price-row">
                    <span class="price">Meta Ads</span>
                    <a href="#" class="btn-buy">Lihat</a>
                </div>
            </div>
            <div class="showcase-item">
                <div class="badge">👍 85 Likes</div>
                <div class="showcase-img-wrap">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=400&q=80" alt="Kopi">
                </div>
                <h3>Burger Byte</h3>
                <div class="price-row">
                    <span class="price">Web Order</span>
                    <a href="#" class="btn-buy">Lihat</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <h4>Products</h4>
                <ul>
                    <li><a href="#">Social Media</a></li>
                    <li><a href="#">Website</a></li>
                    <li><a href="#">Digital Ads</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Category</h4>
                <ul>
                    <li><a href="#">Cafe & Resto</a></li>
                    <li><a href="#">Retail</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Company Info</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Payment Options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow us</h4>
                <ul>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">YouTube</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-links-container">
                <a href="#" class="footer-link-item">Data settings</a>
                <a href="#" class="footer-link-item">Cookie settings</a>
                <a href="#" class="footer-link-item">Privacy Policy</a>
                <a href="#" class="footer-link-item">Terms And Conditions</a>
            </div>
        </div>
    </footer>

    <script>
        // Toggle hamburger menu on mobile
        document.getElementById('hamburger').addEventListener('click', function() {
            document.getElementById('nav-links').classList.toggle('active');
        });

        // Close menu when a link is clicked
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('nav-links').classList.remove('active');
            });
        });
    </script>
</body>
</html>
