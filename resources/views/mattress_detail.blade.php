<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $mattress->name }} - Product Details</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* --- Color Variables (Brown Theme) --- */
        :root {
            --primary-color: #5a3d2b;
            --primary-light: #d2b48c;
            --secondary-color: #8b7355;
            --accent-color: #c97d4a;
            --light-bg: rgba(255, 255, 255, 0.85);
            --dark-text: #3b2a1a;
            --success-color: #8f6e46;
            --danger-color: #a64b2a;
            --border-color: #e2c9a4;
            --gold: #d4a373;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-text);
            line-height: 1.6;
            background: linear-gradient(rgba(84, 56, 39, 0.9), rgba(84, 56, 39, 0.8)),
                        url('https://images.unsplash.com/photo-1562549379-97048934a6c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGJlZHJvb218ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .container {
            max-width: 1400px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        /* --- Product Card --- */
        .product-card-lg {
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            background: var(--light-bg);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .product-card-lg:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        /* --- Product Image --- */
        .product-img-container-lg {
            position: relative;
            height: 600px;
            overflow: hidden;
            background-color: #f0e4d7;
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
        }
        .product-img-lg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        .product-card-lg:hover .product-img-lg {
            transform: scale(1.05);
        }

        /* --- Product Details --- */
        .product-details-lg {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .product-title {
            font-weight: 700;
            font-size: 3rem;
            line-height: 1.1;
            color: var(--primary-color);
        }
        .company-badge {
            background-color: var(--primary-light);
            color: var(--primary-color);
            padding: 0.5em 1.2em;
            font-weight: 600;
            border-radius: 6px;
            font-size: 0.8rem;
            display: inline-block;
            letter-spacing: 0.5px;
        }

        /* --- Price, Description, Ratings --- */
        .price-tag {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent-color);
            font-family: 'Playfair Display', serif;
        }
        .section-label {
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            color: var(--secondary-color);
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }
        .description-box {
            background-color: #fff8f0;
            border-radius: 8px;
            padding: 1.5rem;
            border: 1px solid var(--border-color);
        }
        .rating-badge {
            background-color: rgba(212, 163, 115, 0.15);
            color: var(--gold);
            padding: 0.35em 0.8em;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
        }
        .rating-badge i {
            margin-right: 0.25em;
        }

        /* --- Features --- */
        .feature-item {
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            transition: all 0.2s ease;
            border: 1px solid var(--border-color);
            text-align: center;
        }
        .feature-item:hover {
            border-color: var(--primary-color);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .feature-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 0.75rem;
        }
        .feature-title {
            font-weight: 600;
            font-size: 1rem;
            color: var(--dark-text);
        }
        .feature-desc {
            font-size: 0.9rem;
            color: var(--secondary-color);
            margin-bottom: 0;
        }

        /* --- Buttons --- */
        .btn-cta {
            font-weight: 600;
            border-radius: 8px;
            padding: 0.9rem 1.5rem;
            font-size: 1rem;
            transition: all 0.2s ease;
            letter-spacing: 0.5px;
        }
        .btn-add-to-cart {
            background-color: var(--primary-color);
            border: 2px solid var(--primary-color);
            color: white;
        }
        .btn-add-to-cart:hover {
            background-color: #3e2a1d;
            border-color: #3e2a1d;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(90, 61, 43, 0.3);
        }
        .btn-buy-now {
            background-color: var(--success-color);
            border: 2px solid var(--success-color);
            color: white;
        }
        .btn-buy-now:hover {
            background-color: #6f5138;
            border-color: #6f5138;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(143, 110, 70, 0.3);
        }

        /* --- Placeholder --- */
        .placeholder-icon {
            color: #dcdcdc;
        }
    </style>
</head>

<body>
<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card product-card-lg">
                    <div class="row g-0">
                        <!-- Product Image -->
                        <div class="col-md-6">
                            @if ($mattress->image_path)
                                <div class="product-img-container-lg">
                                    <img src="{{ asset('storage/' . $mattress->image_path) }}" alt="{{ $mattress->name }}" class="product-img-lg">
                                </div>
                            @else
                                <div class="product-img-container-lg d-flex align-items-center justify-content-center">
                                    <div class="text-center p-5">
                                        <i class="fas fa-bed fa-6x placeholder-icon mb-4"></i>
                                        <p class="text-muted">Image not available</p>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Product Details -->
                        <div class="col-md-6">
                            <div class="product-details-lg">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <span class="company-badge">
                                            <i class="fas fa-building me-1"></i> {{ $mattress->company->name }}
                                        </span>
                                        <h1 class="product-title mt-2">{{ $mattress->name }}</h1>
                                        <div class="rating-badge mb-3">
                                            <i class="fas fa-star"></i> 4.8 (256 reviews)
                                        </div>
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="description-box mb-4">
                                    <span class="section-label">Product Description</span>
                                    <p class="mb-0 text-muted">{{ $mattress->desc }}</p>
                                </div>

                                <!-- Features -->
                                <div class="row g-3 mb-4">
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

                                <!-- Buttons -->
                                <div class="d-grid gap-3">
                                    <a href="#" class="btn btn-cta btn-add-to-cart">
                                        <i class="fas fa-shopping-cart"></i> Add to Cart
                                    </a>
                                    <a href="#" class="btn btn-cta btn-buy-now">
                                        <i class="fas fa-credit-card"></i> Buy Now
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
