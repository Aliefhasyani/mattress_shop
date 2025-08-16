<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #543827; /* Deep Brown */
            --primary-light: #a08575; /* Light Brown */
            --secondary-color: #776051; /* Medium Brown */
            --accent-color: #b8860b; /* Dark Goldenrod (Brown Accent) */
            --light-bg: #f5f0e1; /* Light Beige */
            --dark-text: #332922; /* Dark Brown Text */
            --success-color: #6aa84f; /* Green */
            --danger-color: #e06666; /* Red */
            --border-color: #d3c6b6; /* Light Tan Border */
            --gold: #d4af37; /* Classic Gold */
            --gold-dark: #b8860b; /* Dark Goldenrod for hover */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.6;
        }

        .container {
            max-width: 1400px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        .hero-section {
            background: linear-gradient(rgba(84, 56, 39, 0.9), rgba(84, 56, 39, 0.8)),
                        url('https://images.unsplash.com/photo-1562549379-97048934a6c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGJlZHJvb218ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60');
            background-size: cover;
            background-position: center;
            border-radius: 12px;
            padding: 6rem 4rem;
            margin-bottom: 4rem;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .hero-title {
            font-weight: 700;
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.9);
            max-width: 700px;
            margin: 0 auto 3rem;
            font-weight: 300;
        }

        .filter-btn {
            border-radius: 8px;
            padding: 0.9rem 2.2rem;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            color: var(--dark-text);
            background-color: var(--primary-light);
            border-color: var(--primary-light);
        }

        .filter-btn:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(84, 56, 39, 0.3);
        }

        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--gold-dark);
            border-color: var(--gold-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(184, 134, 11, 0.3);
        }

        .product-card {
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            background: white;
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.1);
            border-color: var(--primary-color);
        }

        .product-img-container {
            position: relative;
            overflow: hidden;
            height: 260px;
            background-color: #f8f9fa;
        }

        .product-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .product-card:hover .product-img {
            transform: scale(1.05);
        }

        .card-body {
            padding: 1.8rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .company-badge {
            background-color: var(--primary-light);
            color: var(--primary-color);
            padding: 0.5em 1.2em;
            font-weight: 600;
            border-radius: 6px;
            font-size: 0.8rem;
            display: inline-block;
            margin-bottom: 1rem;
            align-self: flex-start;
            letter-spacing: 0.5px;
        }

        .card-title {
            font-weight: 600;
            font-size: 1.4rem;
            margin-bottom: 0.8rem;
            color: var(--dark-text);
        }

        .card-text {
            color: var(--secondary-color);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            flex-grow: 1;
            line-height: 1.7;
        }

        .price-tag {
            font-size: 1.7rem;
            font-weight: 700;
            color: var(--primary-color);
            font-family: 'Playfair Display', serif;
        }

        .stock-badge {
            font-size: 0.75rem;
            padding: 0.5em 1em;
            border-radius: 6px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .in-stock {
            background-color: rgba(106, 168, 79, 0.1);
            color: var(--success-color);
        }

        .out-of-stock {
            background-color: rgba(224, 102, 102, 0.1);
            color: var(--danger-color);
        }

        .btn-buy {
            font-weight: 600;
            border-radius: 8px;
            padding: 0.8rem 1.5rem;
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            transition: all 0.2s ease;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
        }

        .btn-buy:hover {
            background-color: #3e2723;
            border-color: #3e2723;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(84, 56, 39, 0.2);
        }

        .btn-details {
            font-weight: 600;
            border-radius: 8px;
            padding: 0.8rem 1.5rem;
            background-color: transparent;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            transition: all 0.2s ease;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
        }

        .btn-details:hover {
            background-color: var(--primary-light);
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .empty-state {
            padding: 5rem 3rem;
            text-align: center;
            background-color: white;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            max-width: 700px;
            margin: 0 auto;
            box-shadow: 0 5px 20px rgba(0,0,0,0.03);
        }

        .placeholder-icon {
            color: var(--primary-light);
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .section-subtitle {
            color: var(--secondary-color);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .badge-featured {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background-color: var(--accent-color);
            color: white;
            font-weight: 700;
            padding: 0.3rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            z-index: 1;
        }

   
        .search-form {
            max-width: 800px;
            margin: 0 auto 3rem;
        }

        .search-input {
            height: 50px;
            border: 1px solid var(--border-color);
            border-radius: 8px 0 0 8px;
            padding: 0 1.5rem;
            font-size: 1rem;
            color: var(--dark-text);
            background-color: white;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(84, 56, 39, 0.25);
        }

        .search-btn {
            height: 50px;
            border-radius: 0 8px 8px 0;
            padding: 0 2rem;
            font-weight: 600;
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            background-color: var(--gold-dark);
            border-color: var(--gold-dark);
        }
    </style>
</head>

<x-app-layout>
<div class="container py-5">
    <div class="hero-section text-center">
        <h1 class="hero-title">Luxury Mattress Collection</h1>
        <p class="hero-subtitle">
            Experience unparalleled comfort with our handcrafted mattresses, designed for the perfect night's sleep
        </p>
        {{-- <div class="d-flex justify-content-center flex-wrap gap-3">
            <button class="btn filter-btn"><i class="fas fa-crown me-2"></i> Premium Collection</button>
            <button class="btn filter-btn"><i class="fas fa-filter me-2"></i> Filter Options</button>
            <button class="btn filter-btn"><i class="fas fa-star me-2"></i> Top Rated</button>
        </div> --}}
    </div>

    <div class="section-header">
        <h2 class="section-title">Our Signature Collection</h2>
        <p class="section-subtitle">Each mattress is crafted with premium materials and innovative technology for optimal comfort and support</p>
    </div>
    <div class="mb-5">
        <form action="{{route('search.main')}}" method="GET" class="search-form"> 
            <div class="input-group">
                <input name="keyword" 
                    id="keyword" 
                    class="form-control search-input" 
                    placeholder="Search by mattress name or description..." 
                    value="{{request('keyword')}}"
                    aria-label="Search mattresses">
                <button type="submit" class="btn btn-primary search-btn">
                    <i class="fas fa-search me-2"></i> Search
                </button>
            </div>
        </form>
    </div>

    @if($mattress && $mattress->isEmpty())
        <div class="empty-state">
            <div class="mb-4">
                <i class="fas fa-bed fa-5x placeholder-icon mb-4"></i>
                <h3 class="fw-bold mb-3" style="color: var(--primary-color);">New Collection Coming Soon</h3>
                <p class="text-muted">We're currently refreshing our inventory with the latest innovations in sleep technology.</p>
            </div>
            <a href="#" class="btn btn-primary px-5 py-3">
                <i class="fas fa-envelope me-2"></i> Get Early Access
            </a>
        </div>
    @else
        <div class="row g-4">
            @foreach($mattress as $value)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card product-card">
                        @if($loop->first)
                            <span class="badge-featured">FEATURED</span>
                        @endif
                        <div class="product-img-container">
                            @if ($value->image_path)
                                <img src="{{ asset('storage/' . $value->image_path) }}" class="product-img" alt="{{ $value->name }}">
                            @else
                                <div class="h-100 d-flex align-items-center justify-content-center bg-light">
                                    <i class="fas fa-bed fa-4x placeholder-icon"></i>
                                </div>
                            @endif

                            @if($value->quantity_in_stock <= 0)
                                <span class="stock-badge out-of-stock position-absolute top-3 start-3">
                                    <i class="fas fa-times-circle me-1"></i> Out of Stock
                                </span>
                            @endif
                        </div>
                        <div class="card-body">
                            <span class="company-badge"><i class="fas fa-crown me-1"></i> {{ $value->company->name }}</span>
                            <h5 class="card-title">{{ $value->name }}</h5>
                            <p class="card-text">{{ Str::limit($value->desc, 120) }}</p>

                            <div class="mt-auto">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="price-tag">${{ number_format($value->price, 2) }}</span>
                                    @if($value->quantity_in_stock > 0)
                                        <span class="stock-badge in-stock"><i class="fas fa-check-circle me-1"></i> In Stock</span>
                                    @endif
                                </div>

                                <div class="d-grid gap-2">
                                    @if($value->quantity_in_stock > 0)
                                    

                                            <a href="{{route('product.payment',$value->id)}}" class="btn btn-buy w-100">
                                                <i class="fas fa-shopping-cart me-2"></i> Buy Now
                                            </a>   
                                    
                                    @endif
                                    <a href="{{ route('show.product', $value->id) }}" class="btn btn-details">
                                        <i class="fas fa-info-circle me-2"></i> View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
</x-app-layout>
