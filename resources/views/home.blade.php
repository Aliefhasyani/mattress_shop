<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-light: #eff6ff;
            --secondary-color: #64748b;
            --light-bg: #f8fafc;
            --dark-text: #1e293b;
            --border-color: #e2e8f0;
            --success-color: #10b981;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.6;
        }

        /* Navigation */
        .navbar {
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-weight: 800;
            font-size: 3rem;
            line-height: 1.2;
            letter-spacing: -0.05em;
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--secondary-color);
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--border-color);
            color: var(--dark-text);
            margin-left: 1rem;
        }

        .btn-outline:hover {
            background-color: white;
            border-color: var(--dark-text);
        }

        /* Categories Section */
        .section-header {
            margin-bottom: 3rem;
            text-align: center;
        }

        .section-title {
            font-weight: 700;
            font-size: 2rem;
            letter-spacing: -0.5px;
            margin-bottom: 0.75rem;
        }

        .section-subtitle {
            color: var(--secondary-color);
            max-width: 600px;
            margin: 0 auto;
        }

        .category-card {
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            background: white;
            border: 1px solid var(--border-color);
            text-align: center;
            padding: 2rem 1rem;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            border-color: var(--primary-light);
        }

        .category-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        /* Featured Products */
        .offer-card {
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            background: white;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .offer-card:hover {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            transform: translateY(-2px);
            border-color: var(--primary-light);
        }

        .offer-img-container {
            position: relative;
            overflow: hidden;
            height: 220px;
        }

        .offer-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .offer-card:hover .offer-img {
            transform: scale(1.03);
        }

        .badge-new {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background-color: var(--success-color);
            color: white;
            font-weight: 600;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
        }

        .card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .price-tag {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .old-price {
            text-decoration: line-through;
            color: var(--secondary-color);
            font-size: 0.9rem;
            margin-left: 0.5rem;
        }

        .btn-view {
            font-weight: 500;
            border-radius: 8px;
            padding: 0.5rem 1.25rem;
            background-color: white;
            border: 1px solid var(--border-color);
            color: var(--primary-color);
            transition: all 0.2s ease;
            margin-top: auto;
            align-self: flex-start;
        }

        .btn-view:hover {
            background-color: var(--primary-light);
            border-color: var(--primary-color);
        }

        .card-title {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: var(--dark-text);
        }

        .card-text {
            color: var(--secondary-color);
            font-size: 0.9rem;
            margin-bottom: 1.25rem;
        }

        .placeholder-icon {
            color: #cbd5e1;
        }

        /* Testimonials */
        .testimonial-section {
            background-color: white;
            padding: 5rem 0;
        }

        .testimonial-card {
            background: var(--light-bg);
            border-radius: 12px;
            padding: 2rem;
            height: 100%;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
        }

        .author-name {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .author-title {
            color: var(--secondary-color);
            font-size: 0.85rem;
        }

        /* Newsletter */
        .newsletter-section {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            padding: 4rem 0;
            text-align: center;
        }

        .newsletter-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-control {
            padding: 0.75rem 1.25rem;
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }

        /* Footer */
        .footer {
            background-color: white;
            padding: 3rem 0 1.5rem;
            border-top: 1px solid var(--border-color);
        }

        .footer-title {
            font-weight: 600;
            margin-bottom: 1.25rem;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-links a:hover {
            color: var(--primary-color);
        }

        .social-icons {
            display: flex;
            gap: 1rem;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--light-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .social-icon:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .copyright {
            border-top: 1px solid var(--border-color);
            padding-top: 1.5rem;
            margin-top: 2rem;
            color: var(--secondary-color);
        }
    </style>
</head>

<x-app-layout>
   
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">BrandName</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
         
        </div>
    </nav>

    
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">Premium Products for Your Lifestyle</h1>
                    <p class="hero-subtitle">Discover our curated collection of high-quality items designed to elevate your everyday experience.</p>
                    <div class="d-flex">
                        <a href="#" class="btn btn-primary">Shop Now</a>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1483982258113-b72862e6cff6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Hero Image" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <header class="section-header">
                <h2 class="section-title">Shop by Category</h2>
                <p class="section-subtitle">Explore our wide range of product categories</p>
            </header>

            <div class="row g-4">
                <div class="col-md-4 col-lg-2">
                    <a href="#" class="text-decoration-none">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-tshirt"></i>
                            </div>
                            <h5>Apparel</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2">
                    <a href="#" class="text-decoration-none">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <h5>Electronics</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2">
                    <a href="#" class="text-decoration-none">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <h5>Home</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2">
                    <a href="#" class="text-decoration-none">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <h5>Books</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2">
                    <a href="#" class="text-decoration-none">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-headphones"></i>
                            </div>
                            <h5>Audio</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2">
                    <a href="#" class="text-decoration-none">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-dumbbell"></i>
                            </div>
                            <h5>Fitness</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->       <div class="container">
            <header class="section-header">
                <h2 class="section-title">Featured Products</h2>
                <p class="section-subtitle">Our most popular items this season</p>
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
                                    <a href="#" class="btn btn-view">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <a href="{{route('products')}}" class="btn btn-primary">View All Products</a>
            </div>
        </div>
    </section>


    <section class="testimonial-section">
        <div class="container">
            <header class="section-header">
                <h2 class="section-title">What Our Customers Say</h2>
                <p class="section-subtitle">Trusted by thousands of happy customers worldwide</p>
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
                                <div class="author-title">Verified Buyer</div>
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
            <h2 class="section-title">Stay Updated</h2>
            <p class="section-subtitle mb-4">Subscribe to our newsletter for exclusive deals and updates</p>
            
            <form class="newsletter-form">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Your email address" required>
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
                <small class="text-muted">We'll never share your email with anyone else.</small>
            </form>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <h5 class="footer-title">BrandName</h5>
                    <p>Premium products for your lifestyle. Quality you can trust.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="footer-title">Shop</h5>
                    <ul class="footer-links">
                        <li><a href="#">All Products</a></li>
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
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Returns & Exchanges</a></li>
                        <li><a href="#">Track Order</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="footer-title">About</h5>
                    <ul class="footer-links">
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright text-center">
                <p>&copy; 2023 BrandName. All rights reserved.</p>
            </div>
        </div>
    </footer>
</x-app-layout>