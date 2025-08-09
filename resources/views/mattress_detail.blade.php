<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4a69bd;
            --secondary-color: #6c757d;
            --light-bg: #f5f7fa;
            --dark-text: #212529;
            --green-success: #28a745;
            --red-danger: #dc3545;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
        }

        .product-card {
            border: none;
            border-radius: 1rem;
            overflow: hidden;
            background-color: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .product-img-container {
            position: relative;
            height: 500px;
        }

        .product-img {
            height: 100%;
            object-fit: cover;
            width: 100%;
        }

        .price-tag {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0;
        }
        
        .company-badge {
            background-color: #e6f0ff;
            color: var(--primary-color);
            padding: 0.4em 0.8em;
            font-weight: 600;
            border-radius: 50px;
            font-size: 0.85rem;
            display: inline-block;
            margin-bottom: 0.75rem;
        }

        .description-box {
            background-color: #f8f9fa;
            border-radius: 0.75rem;
            padding: 2rem;
            margin-top: 1.5rem;
        }

        .btn-buy,
        .btn-add-to-cart {
            font-weight: 600;
            letter-spacing: 0.5px;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            transition: all 0.2s ease-in-out;
        }

        .btn-buy {
            background-color: var(--green-success);
            border-color: var(--green-success);
            color: white;
        }
        .btn-buy:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-add-to-cart {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        .btn-add-to-cart:hover {
            background-color: #3b5998;
            border-color: #3b5998;
        }

        .feature-icon {
            color: var(--primary-color);
            font-size: 1.25rem;
        }

        .feature-item p {
            font-size: 0.875rem;
            margin-bottom: 0;
            color: var(--secondary-color);
        }
        
    </style>
</head>

<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card product-card">
                    <div class="row g-0">
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
                                <div class="d-flex align-items-center justify-content-center h-100 bg-light">
                                    <div class="text-center p-4">
                                        <i class="fas fa-bed fa-5x text-secondary mb-3"></i>
                                        <p class="text-muted mb-0">No image available</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card-body p-4 p-lg-5">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div>
                                        <span class="company-badge">{{ $mattress->company->name }}</span>
                                        <h1 class="h2 fw-bold mt-3 mb-2">{{ $mattress->name }}</h1>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-muted small d-block">Price</span>
                                        <div class="price-tag">${{ number_format($mattress->price, 2) }}</div>
                                    </div>
                                </div>
                                
                                <div class="description-box">
                                    <h3 class="h6 fw-bold text-uppercase mb-3">Product Description</h3>
                                    <p class="mb-0 text-secondary">{{ $mattress->desc }}</p>
                                </div>
                                
                                <div class="row text-center my-4 g-3">
                                    <div class="col-4 feature-item">
                                        <i class="fas fa-truck feature-icon mb-2"></i>
                                        <p class="fw-medium">Free Shipping</p>
                                    </div>
                                    <div class="col-4 feature-item">
                                        <i class="fas fa-calendar-check feature-icon mb-2"></i>
                                        <p class="fw-medium">100-Night Trial</p>
                                    </div>
                                    <div class="col-4 feature-item">
                                        <i class="fas fa-shield-alt feature-icon mb-2"></i>
                                        <p class="fw-medium">10-Year Warranty</p>
                                    </div>
                                </div>

                                <div class="d-grid gap-3 mt-4">
                                    <a href="#" class="btn btn-add-to-cart">
                                        <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                                    </a>
                                    <a href="#" class="btn btn-buy">
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