<x-app-layout>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <style>
            .product-header {
                background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
                border-radius: 0.5rem;
                padding: 2rem;
                margin-bottom: 2rem;
            }
            .table-card {
                border-radius: 0.5rem;
                overflow: hidden;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
            }
            .table thead th {
                background-color: #f8f9fa;
                font-weight: 600;
                text-transform: uppercase;
                font-size: 0.8rem;
                letter-spacing: 0.5px;
                border-bottom-width: 2px;
            }
            .table-hover tbody tr:hover {
                background-color: rgba(13, 110, 253, 0.05);
            }
            .badge-company {
                background-color: #e9f7fe;
                color: #0d6efd;
                padding: 0.35em 0.65em;
                font-weight: 500;
                border-radius: 0.25rem;
            }
            .price-cell {
                font-weight: 600;
                color: #2a8a3f;
            }
            .empty-state {
                padding: 3rem;
                text-align: center;
                background-color: #f8f9fa;
                border-radius: 0.5rem;
            }
            .empty-state i {
                font-size: 3rem;
                color: #6c757d;
                margin-bottom: 1rem;
            }
        </style>
    </head>

    <div class="container py-4">
        <div class="product-header text-center">
            <h1 class="fw-bold mb-3">Mattress Inventory</h1>
            <p class="lead text-muted mb-4">Browse our comprehensive selection of premium mattresses</p>
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-primary px-4">
                    <i class="fas fa-plus me-2"></i> Add New Product
                </button>
                <button class="btn btn-outline-secondary px-4">
                    <i class="fas fa-filter me-2"></i> Filter
                </button>
            </div>
        </div>

        <div class="table-card card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="ps-4">ID</th>
                                <th scope="col">Product</th>
                                <th scope="col" class="text-center">Stock</th>
                                <th scope="col" class="text-end pe-4">Price</th>
                                <th scope="col">Manufacturer</th>
                                <th scope="col" class="text-end pe-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mattress as $value)
                            <tr>
                                <th scope="row" class="ps-4 fw-normal text-muted">#{{ $value->id }}</th>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            @if($value->image_path)
                                                <img src="{{ asset('storage/' . $value->image_path) }}" 
                                                     alt="{{ $value->name }}" 
                                                     class="rounded" 
                                                     width="40" 
                                                     height="40"
                                                     style="object-fit: cover;">
                                            @else
                                                <div class="bg-light rounded d-flex align-items-center justify-content-center" 
                                                     style="width: 40px; height: 40px;">
                                                    <i class="fas fa-bed text-muted"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">{{ $value->name }}</h6>
                                            <small class="text-muted">{{ Str::limit($value->desc, 30) }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-{{ $value->quantity_in_stock > 0 ? 'success' : 'danger' }}-subtle text-{{ $value->quantity_in_stock > 0 ? 'success' : 'danger' }} rounded-pill">
                                        {{ $value->quantity_in_stock }} in stock
                                    </span>
                                </td>
                                <td class="price-cell text-end pe-4">${{ number_format($value->price, 2) }}</td>
                                <td>
                                    <span class="badge-company">
                                        <i class="fas fa-building me-1"></i> {{ $value->company->name }}
                                    </span>
                                </td>
                                <td class="text-end pe-4">
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-primary rounded-start">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger rounded-end">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($mattress->isEmpty())
                        <div class="empty-state">
                            <i class="fas fa-bed"></i>
                            <h4 class="mb-3">No Mattresses Found</h4>
                            <p class="text-muted mb-4">It looks like there are no mattresses in your inventory yet.</p>
                            <button class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i> Add New Mattress
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            
            
        </div>
    </div>
</x-app-layout>