<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #5d4037; /* Darker, more luxurious brown */
            --primary-light: #efebe9;
            --secondary-color: #616161; /* Softer gray */
            --dark-text: #212121; /* Richer black */
            --light-bg: #fafafa;
            --border-color: #e0e0e0;
            --success-color: #689f38;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.8;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            color: var(--dark-text);
        }

        /* Navigation */
        .navbar {
            padding: 1.5rem 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--primary-color) !important;
        }

        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem;
            color: var(--secondary-color);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), url('https://images.unsplash.com/photo-1517584069814-74c053051ae9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80') no-repeat center center;
            background-size: cover;
            padding: 8rem 0;
            position: relative;
        }
        .hero-title {
            font-weight: 700;
            font-size: 4rem;
            line-height: 1.1;
            letter-spacing: 0.02em;
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            font-size: 1.4rem;
            color: var(--secondary-color);
            margin-bottom: 2.5rem;
            max-width: 700px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 1rem 2.5rem;
            font-weight: 600;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #4e342e;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            margin-left: 1rem;
            padding: 1rem 2.5rem;
            font-weight: 600;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .btn-outline:hover {
            background-color: var(--primary-color);
            color: white;
        }

        /* Categories Section */
        .section-header {
            margin-bottom: 4rem;
            text-align: center;
        }
        .section-title {
            font-weight: 700;
            font-size: 2.5rem;
            letter-spacing: 0.05em;
            margin-bottom: 1rem;
        }
        .section-subtitle {
            color: var(--secondary-color);
            max-width: 700px;
            margin: 0 auto;
        }
        .category-card {
            border-radius: 4px;
            transition: all 0.3s ease;
            background: white;
            border: 1px solid var(--border-color);
            text-align: center;
            padding: 3rem 1.5rem;
        }
        .category-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            border-color: var(--primary-color);
        }
        .category-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        /* Featured Products */
        .offer-card {
            border: 1px solid var(--border-color);
            border-radius: 4px;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            background: white;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .offer-card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            transform: translateY(-5px);
            border-color: var(--primary-color);
        }
        .offer-img-container {
            position: relative;
            overflow: hidden;
            height: 250px;
        }
        .offer-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .offer-card:hover .offer-img {
            transform: scale(1.05);
        }
        .badge-new {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background-color: var(--success-color);
            color: white;
            font-weight: 600;
            padding: 0.4rem 1rem;
            border-radius: 50px;
        }
        .card-body {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .price-tag {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        .old-price {
            text-decoration: line-through;
            color: var(--secondary-color);
            font-size: 1rem;
            margin-left: 0.75rem;
        }
        .btn-view {
            font-weight: 500;
            border-radius: 4px;
            padding: 0.75rem 1.5rem;
            background-color: transparent;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            transition: all 0.2s ease;
            margin-top: auto;
            align-self: flex-start;
        }
        .btn-view:hover {
            background-color: var(--primary-color);
            color: white;
        }
        .card-title {
            font-weight: 600;
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
        }
        .card-text {
            color: var(--secondary-color);
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }

        /* Testimonials */
        .testimonial-section {
            background-color: white;
            padding: 6rem 0;
        }
        .testimonial-card {
            background: var(--light-bg);
            border-radius: 4px;
            padding: 2.5rem;
            height: 100%;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        .testimonial-text {
            font-style: italic;
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: var(--secondary-color);
        }
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1.5rem;
            border: 2px solid var(--primary-color);
        }
        .author-name {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
        }
        .author-title {
            color: var(--secondary-color);
            font-size: 0.9rem;
        }

        /* Newsletter */
        .newsletter-section {
            background: var(--primary-light);
            padding: 5rem 0;
            text-align: center;
        }
        .newsletter-form {
            max-width: 600px;
            margin: 0 auto;
        }
        .form-control {
            padding: 0.85rem 1.5rem;
            border-radius: 4px;
            border: 1px solid var(--border-color);
        }

        /* Footer */
        .footer {
            background-color: #f5f5f5;
            padding: 4rem 0 2rem;
            border-top: 1px solid var(--border-color);
        }
        .footer-title {
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }
        .footer-links {
            list-style: none;
            padding: 0;
        }
        .footer-links li {
            margin-bottom: 0.75rem;
        }
        .footer-links a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .footer-links a:hover {
            color: var(--primary-color);
        }
        .social-icon {
            background-color: var(--primary-color);
            color: white;
        }
        .social-icon:hover {
            background-color: #4e342e;
        }
        .copyright {
            border-top: 1px solid var(--border-color);
            padding-top: 2rem;
            margin-top: 3rem;
            color: var(--secondary-color);
            font-size: 0.9rem;
        }
    </style>
</head>
<x-app-layout>
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center hero-content">
                    <h1 class="hero-title">Timeless Style, Exceptional Quality.</h1>
                    <p class="hero-subtitle mx-auto">
                        Experience the elegance and craftsmanship of our meticulously curated collection.
                        Every piece tells a story of luxury and enduring design.
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="{{route("products")}}" class="btn btn-primary">Discover the Collection</a>
                        <a href="{{route('about')}}" class="btn btn-outline">About</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <header class="section-header">
                <h2 class="section-title">Featured Products</h2>
                <p class="section-subtitle">Our most coveted items, handpicked for their exquisite design and unparalleled craftsmanship.</p>
            </header>
            <div class="row g-4">
                @foreach($offers as $value)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card offer-card">
                            <div class="offer-img-container">
                                @if ($value->image_path)
                                    <img src="{{ asset('storage/' . $value->image_path) }}" 
                                         class="offer-img" 
                                         alt="{{ $value->name }}">
                                @else
                                    <div class="h-100 d-flex align-items-center justify-content-center bg-light">
                                        <i class="fas fa-box-open fa-3x placeholder-icon"></i>
                                    </div>
                                @endif
                                <span class="badge-new">New</span>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <h4 class="card-title">{{ $value->name }}</h4>
                                    <p class="card-text">{{ Str::limit($value->desc, 80) }}</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <div>
                                        <span class="price-tag">${{ number_format($value->price, 2) }}</span>
                                        <span class="old-price">${{ number_format($value->price * 1.2, 2) }}</span>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mb-4 mt-5">
                <a href="{{route('products')}}" class="btn btn-primary">View All Products</a>
            </div>
        </div>
    </section>
    
    <section class="testimonial-section">
        <div class="container">
            <header class="section-header">
                <h2 class="section-title">What Our Patrons Say</h2>
                <p class="section-subtitle">Authentic testimonials from our valued customers.</p>
            </header>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "The quality of products exceeded my expectations. Shipping was fast and customer service was excellent!"
                        </div>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah J." class="author-avatar">
                            <div>
                                <div class="author-name">Sarah J.</div>
                                <div class="author-title">Verified Patron</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "I've been shopping here for years and never been disappointed. Great selection and fair prices."
                        </div>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael T." class="author-avatar">
                            <div>
                                <div class="author-name">Michael T.</div>
                                <div class="author-title">Loyal Customer</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "The customer support team helped me choose the perfect product for my needs. Highly recommended!"
                        </div>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Emily R." class="author-avatar">
                            <div>
                                <div class="author-name">Emily R.</div>
                                <div class="author-title">First-time Buyer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter-section">
        <div class="container">
            <h2 class="section-title">Stay Informed</h2>
            <p class="section-subtitle mb-4">Subscribe to our newsletter for exclusive offers and a glimpse into our newest collections.</p>
            <form class="newsletter-form">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Your email address" required>
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
                <small class="text-muted">We respect your privacy and will never share your email.</small>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <h5 class="footer-title">MattShop</h5>
                    <p>Experience the art of living with our curated selection of premium goods.</p>
                    {{-- <div class="social-icons mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
                    </div> --}}
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="footer-title">Shop</h5>
                    <ul class="footer-links">
                        <li><a href="{{route('products')}}">All Products</a></li>
                        <li><a href="#">Featured Items</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Sale Items</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="footer-title">Customer Service</h5>
                    <ul class="footer-links">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Shipping & Returns</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Corporate Gifting</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="footer-title">About</h5>
                    <ul class="footer-links">
                        <li><a href="#">Our Heritage</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright text-center">
                <p>&copy; 2023 MattShop. All rights reserved.</p>
            </div>
        </div>
    </footer>
</x-app-layout>