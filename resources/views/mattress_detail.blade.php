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
            --warning-color: #f59e0b;
            --border-color: #e2e8f0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.6;
        }

        .product-card {
            border: none;
            border-radius: 1.5rem;
            overflow: hidden;
            background-color: #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .product-img-container {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .product-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-img-container:hover .product-img {
            transform: scale(1.02);
        }

        .price-tag {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0;
        }

        .company-badge {
            background-color: var(--primary-light);
            color: var(--primary-color);
            padding: 0.5em 1em;
            font-weight: 600;
            border-radius: 50px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .description-box {
            background-color: var(--light-bg);
            border-radius: 1rem;
            padding: 2rem;
            margin: 2rem 0;
            border: 1px solid var(--border-color);
        }

        .btn-cta {
            font-weight: 600;
            letter-spacing: 0.5px;
            border-radius: 12px;
            padding: 1rem 2rem;
            transition: all 0.2s ease;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-add-to-cart {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        .btn-add-to-cart:hover {
            background-color: #3a56cd;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.2);
        }

        .btn-buy-now {
            background-color: var(--success-color);
            border-color: var(--success-color);
            color: white;
        }

        .btn-buy-now:hover {
            background-color: #0e9f6e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.2);
        }

        .feature-icon {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .feature-item {
            padding: 1.5rem;
            text-align: center;
            border-radius: 0.75rem;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transform: translateY(-5px);
        }

        .feature-title {
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 0.25rem;
            color: var(--dark-text);
        }

        .feature-desc {
            font-size: 0.85rem;
            color: var(--secondary-color);
            margin-bottom: 0;
        }

        .product-title {
            font-weight: 700;
            font-size: 2rem;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .section-label {
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--secondary-color);
            margin-bottom: 1rem;
            display: block;
        }

        .placeholder-icon {
            color: #e2e8f0;
        }

        .rating-badge {
            background-color: rgba(245, 158, 11, 0.1);
            color: var(--warning-color);
            padding: 0.35em 0.75em;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
        }

        .rating-badge i {
            margin-right: 0.25em;
        }
    </style>
</head>

<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card product-card">
                    <div class="row g-0">
                        <!-- Product Image Column -->
                        <div class="col-md-6">
                            @if ($mattress->image_path)
                                <div class="product-img-container">
                                    <img 
                                        src="{{ asset('storage/' . $mattress->image_path) }}" 
                                        alt="{{ $mattress->name }}" 
                                        class="product-img"
                                    >
                                </div>
                            @else
                                <div class="product-img-container d-flex align-items-center justify-content-center bg-light">
                                    <div class="text-center p-4">
                                        <i class="fas fa-bed fa-5x placeholder-icon mb-3"></i>
                                        <p class="text-muted">No image available</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Product Info Column -->
                        <div class="col-md-6">
                            <div class="card-body p-4 p-lg-5">
                                <div class="d-flex justify-content-between align-items-start mb-4">
                                    <div>
                                        <span class="company-badge">
                                            <i class="fas fa-building me-1"></i> {{ $mattress->company->name }}
                                        </span>
                                        <h1 class="product-title">{{ $mattress->name }}</h1>
                                        <div class="rating-badge mb-3">
                                            <i class="fas fa-star"></i> 4.8 (256 reviews)
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="section-label">Price</span>
                                        <div class="price-tag">${{ number_format($mattress->price, 2) }}</div>
                                    </div>
                                </div>
                                
                                <!-- Description Box -->
                                <div class="description-box">
                                    <span class="section-label">Product Description</span>
                                    <p class="mb-0">{{ $mattress->desc }}</p>
                                </div>
                                
                                <!-- Features Grid -->
                                <div class="row g-3 my-4">
                                    <div class="col-4">
                                        <div class="feature-item">
                                            <i class="fas fa-truck feature-icon"></i>
                                            <h4 class="feature-title">Free Shipping</h4>
                                            <p class="feature-desc">Delivered to your door</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="feature-item">
                                            <i class="fas fa-calendar-check feature-icon"></i>
                                            <h4 class="feature-title">100-Night Trial</h4>
                                            <p class="feature-desc">Risk-free experience</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="feature-item">
                                            <i class="fas fa-shield-alt feature-icon"></i>
                                            <h4 class="feature-title">10-Year Warranty</h4>
                                            <p class="feature-desc">Quality guaranteed</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Call-to-Action Buttons -->
                                <div class="d-grid gap-3 mt-4">
                                    <a href="#" class="btn btn-cta btn-add-to-cart">
                                        <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                                    </a>
                                    <a href="#" class="btn btn-cta btn-buy-now">
                                        <i class="fas fa-credit-card me-2"></i> Buy Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>