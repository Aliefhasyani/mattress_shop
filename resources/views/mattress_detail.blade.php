<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .product-img {
            height: 350px;
            object-fit: cover;
            width: 100%;
        }
        .price-tag {
            font-size: 1.75rem;
            font-weight: 700;
        }
        .company-badge {
            background-color: #f8f9fa;
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-weight: 500;
        }
        .description-box {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 1.5rem 0;
        }
        .btn-buy {
            padding: 0.75rem 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
    </style>
</head>

<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <div class="row g-0">
                    
                        <div class="col-md-6">
                            @if ($mattress->image_path)
                                <img 
                                    src="{{ asset('storage/' . $mattress->image_path) }}" 
                                    alt="{{ $mattress->name }}" 
                                    class="product-img"
                                >
                            @else
                                <div class="d-flex align-items-center justify-content-center h-100 bg-light">
                                    <div class="text-center p-4">
                                        <i class="fas fa-bed fa-4x text-secondary mb-3"></i>
                                        <p class="text-muted mb-0">No image available</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        
                       
                        <div class="col-md-6">
                            <div class="card-body p-4 p-lg-5">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div>
                                        <span class="company-badge text-muted">{{ $mattress->company->name }}</span>
                                        <h1 class="h3 fw-bold mt-3 mb-2">{{ $mattress->name }}</h1>
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <span class="text-muted">Price</span>
                                    <div class="price-tag text-primary">${{ number_format($mattress->price, 2) }}</div>
                                </div>
                                
                        
                                <div class="description-box">
                                    <h3 class="h6 fw-bold mb-3">Product Description</h3>
                                    <p class="mb-0">{{ $mattress->desc }}</p>
                                </div>
                                
                                <div class="d-grid gap-2 mt-4">
                                    <button class="btn btn-primary btn-buy">
                                        <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                                    </button>
                                    <button class="btn btn-success btn-buy">
                                        <i class="fas fa-credit-card me-2"></i> Buy Now
                                    </button>
                                </div>
                                
                                <div class="mt-4 pt-3 border-top">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <div class="text-muted small">
                                                <i class="fas fa-truck me-1"></i> Free Shipping
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-muted small">
                                                <i class="fas fa-calendar-check me-1"></i> 100-Night Trial
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-muted small">
                                                <i class="fas fa-shield-alt me-1"></i> 10-Year Warranty
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            
            </div>
        </div>
    </div>
</x-app-layout>