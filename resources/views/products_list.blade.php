<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    .hero-section {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      border-radius: 0.75rem;
      padding: 3rem 2rem;
      margin-bottom: 3rem;
    }
    .product-card {
      transition: all 0.3s ease;
      border: none;
      border-radius: 0.75rem;
      overflow: hidden;
    }
    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .product-img {
      height: 250px;
      object-fit: cover;
      width: 100%;
    }
    .card-body {
      padding: 1.5rem;
    }
    .price-tag {
      font-size: 1.25rem;
      font-weight: 700;
      color: #2a8a3f;
    }
    .company-badge {
      background-color: #e9f7fe;
      color: #0d6efd;
      padding: 0.35em 0.65em;
      font-weight: 500;
      border-radius: 0.25rem;
      display: inline-block;
      margin-bottom: 0.5rem;
    }
    .btn-details {
      padding: 0.5rem 1rem;
      font-weight: 500;
    }
    .btn-buy {
      padding: 0.5rem 1rem;
      font-weight: 500;
      background-color: #28a745;
      border-color: #28a745;
    }
    .empty-state {
      padding: 3rem;
      text-align: center;
      background-color: #f8f9fa;
      border-radius: 0.5rem;
    }
  </style>
</head>

<x-app-layout>
<body class="bg-light">
  <div class="container py-5">
    <!-- Hero Section -->
    <div class="hero-section text-center">
      <h1 class="display-5 fw-bold mb-3">Premium Mattress Collection</h1>
      <p class="lead text-muted mb-4">Discover the perfect blend of comfort and support for your best night's sleep</p>
      <div class="d-flex justify-content-center gap-3">
        <button class="btn btn-primary px-4">
          <i class="fas fa-star me-2"></i> Featured Products
        </button>
        <button class="btn btn-outline-secondary px-4">
          <i class="fas fa-filter me-2"></i> Filter Options
        </button>
      </div>
    </div>

    <!-- Product Grid -->
    @if($mattress->isEmpty())
      <div class="empty-state">
        <i class="fas fa-bed fa-4x text-muted mb-4"></i>
        <h3 class="mb-3">No Mattresses Available</h3>
        <p class="text-muted mb-4">We're currently updating our inventory. Please check back later.</p>
        <button class="btn btn-primary">
          <i class="fas fa-envelope me-2"></i> Notify Me When Available
        </button>
      </div>
    @else
      <div class="row g-4">
        @foreach($mattress as $value)
          <div class="col-md-4 col-lg-3">
            <div class="card h-100 product-card">
              <div class="position-relative">
                <img src="{{ asset('storage/' . $value->image_path) }}" class="product-img" alt="{{ $value->name }}">
                @if($value->quantity_in_stock <= 0)
                  <span class="position-absolute top-0 start-0 bg-danger text-white p-2">Out of Stock</span>
                @endif
              </div>
              <div class="card-body d-flex flex-column">
                <span class="company-badge">
                  <i class="fas fa-building me-1"></i> {{ $value->company->name }}
                </span>
                <h5 class="card-title mb-2">{{ $value->name }}</h5>
                <p class="card-text text-muted mb-3">{{ Str::limit($value->desc, 80) }}</p>
                
                <div class="mt-auto">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="price-tag">${{ number_format($value->price, 2) }}</span>
                    @if($value->quantity_in_stock > 0)
                      <span class="badge bg-success bg-opacity-10 text-success">
                        <i class="fas fa-check-circle me-1"></i> In Stock
                      </span>
                    @endif
                  </div>
                  
                  <div class="d-grid gap-2">
                    @if($value->quantity_in_stock > 0)
                      <a href="#" class="btn btn-buy text-white">
                        <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                      </a>
                    @endif
                    <a href="{{route('show.product',$value->id)}}" class="btn btn-outline-primary btn-details">
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