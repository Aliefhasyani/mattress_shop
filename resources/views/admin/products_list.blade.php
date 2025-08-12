<x-app-layout>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
       <style>
    :root {
        --primary-color: #8B5E3C; /* Warm brown */
        --primary-hover: #704830; /* Darker brown for hover */
        --secondary-color: #6c757d;
        --light-bg: #f5f7fa;
        --dark-text: #212529;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--light-bg);
        color: var(--dark-text);
    }

    /* Header Section */
    .product-header {
        background: linear-gradient(135deg, #ffffff 0%, #f2ede9 100%);
        border-radius: 1rem;
        padding: 3rem 2rem;
        margin-bottom: 3rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    /* Table Card */
    .table-card {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
        border: 1px solid #e9ecef;
        background-color: #fff;
    }

    /* Table Header */
    .table thead th {
        background-color: #f8f9fa;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        border-bottom-width: 2px;
        color: var(--secondary-color);
    }

    /* Row Hover Effect */
    .table-hover tbody tr {
        transition: background-color 0.2s ease;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(139, 94, 60, 0.05); /* light brown hover */
    }

    /* Company Badge */
    .badge-company {
        background-color: #f3e7df; /* light beige background */
        color: var(--primary-color);
        padding: 0.4em 0.8em;
        font-weight: 600;
        border-radius: 50px;
        font-size: 0.75rem;
    }

    /* Price Cell */
    .price-cell {
        font-weight: 700;
        color: var(--primary-color);
    }

    /* Empty State */
    .empty-state {
        padding: 5rem;
        text-align: center;
        background-color: #ffffff;
        border-radius: 1rem;
        border: 1px solid #e9ecef;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    .empty-state i {
        font-size: 4rem;
        color: var(--primary-color);
        margin-bottom: 1.5rem;
    }

    /* Buttons */
    .btn-action {
        border-radius: 50px;
        padding: 0.5rem 1.25rem;
        font-weight: 600;
    }
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    .btn-primary:hover {
        background-color: var(--primary-hover);
        border-color: var(--primary-hover);
    }
    .btn-outline-primary {
        color: var(--primary-color);
        border-color: var(--primary-color);
    }
    .btn-outline-primary:hover {
        background-color: var(--primary-color);
        color: #fff;
    }
    .btn-outline-secondary:hover {
        background-color: var(--secondary-color);
        color: #fff;
    }


    .fa-plus,
    .fa-filter,
    .fa-bed,
    .fa-eye,
    .fa-edit,
    .fa-trash,
    .fa-building,
    .fa-check-circle,
    .fa-times-circle {
        color: var(--primary-color);
    }
    .btn-outline-danger .fa-trash {
        color: #dc3545;
    }
</style>

    </head>

    <div class="container py-5">
        <div class="product-header text-center">
            <h1 class="fw-bold mb-3">Mattress Inventory</h1>
            <p class="lead text-muted mb-4">Efficiently manage your comprehensive selection of mattresses</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <a href="{{ route('product.create') }}" class="btn btn-primary px-4 btn-action">
                    <i class="fas fa-plus me-2"></i> Add New Product
                </a>
                <button class="btn btn-outline-secondary px-4 btn-action">
                    <i class="fas fa-filter me-2"></i> Filter
                </button>
            </div>
        </div>

        <div class="table-card card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    @if($mattress->isEmpty())
                        <div class="empty-state">
                            <i class="fas fa-bed"></i>
                            <h4 class="mb-3 fw-bold">No Mattresses Found</h4>
                            <p class="text-muted mb-4">It looks like there are no mattresses in your inventory yet.</p>
                            <button class="btn btn-primary btn-action">
                                <i class="fas fa-plus me-2"></i> Add New Mattress
                            </button>
                        </div>
                    @else
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="ps-4">ID</th>
                                    <th scope="col">Product</th>
                                    <th scope="col" class="text-center">Stock</th>
                                    <th scope="col">Manufacturer</th>
                                    <th scope="col" class="text-end">Price</th>
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
                                                        width="50" 
                                                        height="50"
                                                        style="object-fit: cover;">
                                                @else
                                                    <div class="bg-light rounded d-flex align-items-center justify-content-center" 
                                                        style="width: 50px; height: 50px;">
                                                        <i class="fas fa-bed text-muted fa-lg"></i>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0 fw-medium">{{ $value->name }}</h6>
                                                <small class="text-muted">{{ Str::limit($value->desc, 40) }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        @if($value->quantity_in_stock > 0)
                                            <span class="badge bg-success-subtle text-success rounded-pill px-3 py-2">
                                                <i class="fas fa-check-circle me-1"></i> In Stock ({{ $value->quantity_in_stock }})
                                            </span>
                                        @else
                                            <span class="badge bg-danger-subtle text-danger rounded-pill px-3 py-2">
                                                <i class="fas fa-times-circle me-1"></i> Out of Stock
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge-company">
                                            <i class="fas fa-building me-1"></i> {{ $value->company->name }}
                                        </span>
                                    </td>
                                    <td class="price-cell text-end">${{ number_format($value->price, 2) }}</td>
                                    <td class="text-end pe-4">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.product', $value->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form method="POST" action="{{route('delete.product',$value->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <button  class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            <a href="{{route('product.edit',$value->id)}}" class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
                                                  

                                         
