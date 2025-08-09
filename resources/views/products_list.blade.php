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

        .hero-section {
            background: linear-gradient(45deg, #ffffff 0%, var(--light-bg) 100%);
            border-radius: 1rem;
            padding: 4rem 2.5rem;
            margin-bottom: 3rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e9ecef;
            border-radius: 1rem;
            overflow: hidden;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .product-img {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }

        .card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .price-tag {
            font-size: 1.5rem;
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

        .btn-details,
        .btn-buy {
            font-weight: 600;
            border-radius: 50px;
            padding: 0.65rem 1.5rem;
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

        .btn-details {
            border-color: #e9ecef;
            color: var(--secondary-color);
        }

        .btn-details:hover {
            background-color: #f8f9fa;
            border-color: #dee2e6;
        }

        .empty-state {
            padding: 5rem;
            text-align: center;
            background-color: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e9ecef;
        }

        .badge-stock {
            font-size: 0.8rem;
            padding: 0.35em 0.75em;
            border-radius: 50px;
        }
    </style>
</head>

<x-app-layout>
    <body class="bg-light">
        <div class="container py-5">
            <div class="hero-section">
                <h1 class="display-5 fw-bold mb-3">Premium Mattress Collection</h1>
                <p class="lead text-secondary mb-4">Discover the perfect blend of comfort and support for your best night's sleep.</p>
                <div class="d-flex justify-content-center flex-wrap gap-3">
                    <button class="btn btn-primary px-4">
                        <i class="fas fa-star me-2"></i> Featured Products
                    </button>
                    <button class="btn btn-outline-secondary px-4">
                        <i class="fas fa-filter me-2"></i> Filter Options
                    </button>
                </div>
            </div>

            @if($mattress->isEmpty())
                <div class="empty-state">
                    <i class="fas fa-bed fa-5x text-muted mb-4"></i>
                    <h3 class="mb-3 fw-bold">No Mattresses Available</h3>
                    <p class="text-muted mb-4">We're currently updating our inventory. Please check back later.</p>
                    <a href="#" class="btn btn-primary px-4">
                        <i class="fas fa-envelope me-2"></i> Notify Me When Available
                    </a>
                </div>
            @else
                <div class="row g-4">
                    @foreach($mattress as $value)
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="card h-100 product-card">
                                <div class="position-relative">
                                    <img src="{{ asset('storage/' . $value->image_path) }}" class="product-img" alt="{{ $value->name }}">
                                    @if($value->quantity_in_stock <= 0)
                                        <span class="badge bg-danger position-absolute top-0 start-0 m-3 px-3 py-2">Out of Stock</span>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <span class="company-badge">
                                        <i class="fas fa-building me-1"></i> {{ $value->company->name }}
                                    </span>
                                    <h5 class="card-title fw-bold mb-2">{{ $value->name }}</h5>
                                    <p class="card-text text-muted mb-3 flex-grow-1">{{ $value->desc }}</p>

                                    <div class="mt-auto">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="price-tag">${{ number_format($value->price, 2) }}</span>
                                            @if($value->quantity_in_stock > 0)
                                                <span class="badge bg-success bg-opacity-10 text-success badge-stock">
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
                                            <a href="{{ route('show.product', $value->id) }}" class="btn btn-outline-primary btn-details">
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
    </body>
</x-app-layout>