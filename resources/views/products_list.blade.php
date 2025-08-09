<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-light: #e6f0ff;
            --secondary-color: #64748b;
            --light-bg: #f8fafc;
            --dark-text: #1e293b;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --border-color: #e2e8f0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.6;
        }

        .hero-section {
            background: linear-gradient(135deg, #ffffff 0%, #f0f7ff 100%);
            border-radius: 16px;
            padding: 4rem 2rem;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(67,97,238,0.1) 0%, rgba(67,97,238,0) 70%);
            border-radius: 50%;
        }

        .product-card {
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            overflow: hidden;
            background: white;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08);
            border-color: var(--primary-light);
        }

        .product-img-container {
            position: relative;
            overflow: hidden;
            height: 240px;
        }

        .product-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-img {
            transform: scale(1.03);
        }

        .card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .price-tag {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .company-badge {
            background-color: var(--primary-light);
            color: var(--primary-color);
            padding: 0.35em 0.8em;
            font-weight: 600;
            border-radius: 50px;
            font-size: 0.8rem;
            display: inline-block;
            margin-bottom: 0.75rem;
            align-self: flex-start;
        }

        .btn-buy {
            font-weight: 600;
            border-radius: 10px;
            padding: 0.65rem 1.25rem;
            background-color: var(--success-color);
            border-color: var(--success-color);
            color: white;
            transition: all 0.2s ease;
        }

        .btn-buy:hover {
            background-color: #0e9f6e;
            border-color: #0d9567;
            transform: translateY(-1px);
        }

        .btn-details {
            font-weight: 500;
            border-radius: 10px;
            padding: 0.65rem 1.25rem;
            background-color: white;
            border: 1px solid var(--border-color);
            color: var(--primary-color);
            transition: all 0.2s ease;
        }

        .btn-details:hover {
            background-color: var(--primary-light);
            border-color: var(--primary-color);
        }

        .empty-state {
            padding: 4rem 2rem;
            text-align: center;
            background-color: white;
            border-radius: 16px;
            border: 1px solid var(--border-color);
            max-width: 600px;
            margin: 0 auto;
        }

        .stock-badge {
            font-size: 0.8rem;
            padding: 0.35em 0.75em;
            border-radius: 50px;
            font-weight: 500;
        }

        .in-stock {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .out-of-stock {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
        }

        .hero-title {
            font-weight: 700;
            font-size: 2.5rem;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            color: var(--secondary-color);
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .filter-btn {
            border-radius: 10px;
            padding: 0.65rem 1.5rem;
            font-weight: 500;
            transition: all 0.2s ease;
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
            flex-grow: 1;
        }

        .placeholder-icon {
            color: #e2e8f0;
        }
    </style>
</head>

<x-app-layout>
    <div class="container py-5">
        <!-- Hero Section -->
        <div class="hero-section text-center">
            <h1 class="hero-title">Premium Mattress Collection</h1>
            <p class="hero-subtitle">Experience unparalleled comfort with our handcrafted mattresses designed for your perfect night's sleep</p>
            <div class="d-flex justify-content-center flex-wrap gap-2">
                <button class="btn btn-primary filter-btn">
                    <i class="fas fa-star me-2"></i> Featured
                </button>
                <button class="btn btn-outline-secondary filter-btn">
                    <i class="fas fa-filter me-2"></i> Filters
                </button>
                <button class="btn btn-outline-secondary filter-btn">
                    <i class="fas fa-sort me-2"></i> Sort
                </button>
            </div>
        </div>

        <!-- Product Grid -->
        @if($mattress->isEmpty())
            <div class="empty-state">
                <div class="mb-4">
                    <i class="fas fa-bed fa-4x text-muted mb-3"></i>
                    <h3 class="fw-bold mb-2">No Mattresses Available</h3>
                    <p class="text-muted">We're currently preparing our new collection. Please check back soon.</p>
                </div>
                <a href="#" class="btn btn-primary px-4">
                    <i class="fas fa-envelope me-2"></i> Notify Me When Available
                </a>
            </div>
        @else
            <div class="row g-4">
                @foreach($mattress as $value)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-card">
                            <div class="product-img-container">
                                @if ($value->image_path)
                                    <img src="{{ asset('storage/' . $value->image_path) }}" 
                                         class="product-img" 
                                         alt="{{ $value->name }}">
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
                                <span class="company-badge">
                                    <i class="fas fa-building me-1"></i> {{ $value->company->name }}
                                </span>
                                <h5 class="card-title">{{ $value->name }}</h5>
                                <p class="card-text">{{ Str::limit($value->desc, 100) }}</p>
                                
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="price-tag">${{ number_format($value->price, 2) }}</span>
                                        @if($value->quantity_in_stock > 0)
                                            <span class="stock-badge in-stock">
                                                <i class="fas fa-check-circle me-1"></i> In Stock
                                            </span>
                                        @endif
                                    </div>

                                    <div class="d-grid gap-2">
                                        @if($value->quantity_in_stock > 0)
                                            <a href="#" class="btn btn-buy">
                                                <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                                            </a>
                                        @endif
                                        <a href="{{ route('show.product', $value->id) }}" class="btn btn-details">
                                            <i class="fas fa-info-circle me-2"></i> Details
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