<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .company-table {
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        .company-table thead th {
            background-color: #f8f9fa;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            border-bottom-width: 2px;
        }
        .company-table tbody tr:hover {
            background-color: rgba(13, 110, 253, 0.05);
        }
        .table-actions .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }
        .empty-state {
            padding: 3rem;
            text-align: center;
            background-color: #f8f9fa;
            border-radius: 0.5rem;
        }
        .company-size {
            font-weight: 500;
            padding: 0.35em 0.65em;
            border-radius: 0.25rem;
        }
        .company-size.small {
            background-color: #e7f5ff;
            color: #1864ab;
        }
        .company-size.medium {
            background-color: #fff3bf;
            color: #e67700;
        }
        .company-size.large {
            background-color: #ebfbee;
            color: #2b8a3e;
        }
    </style>
</head>

<x-app-layout>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="h4 fw-bold mb-0">Registered Companies</h2>
            <a href="#" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i> Add New Company
            </a>
        </div>

        <div class="card company-table">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="ps-4">ID</th>
                                <th scope="col">Company</th>
                                <th scope="col">Contact</th>
                                <th scope="col" class="text-center">Size</th>
                                <th scope="col" class="text-end pe-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $value)
                            <tr>
                                <th scope="row" class="ps-4 fw-normal text-muted">#{{ $value->id }}</th>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" 
                                                 style="width: 40px; height: 40px;">
                                                <i class="fas fa-building text-muted"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">{{ $value->name }}</h6>
                                            <small class="text-muted">{{ $value->company_email }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-phone text-muted me-2"></i>
                                        <span>{{ $value->company_phone_number }}</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="company-size">
                                        {{ $value->size }}
                                    </span>
                                </td>
                                <td class="text-end pe-4">
                                    <div class="btn-group table-actions" role="group">
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

                    @if($companies->isEmpty())
                        <div class="empty-state">
                            <i class="fas fa-building fa-4x text-muted mb-4"></i>
                            <h4 class="mb-3">No Companies Found</h4>
                            <p class="text-muted mb-4">There are currently no companies registered in the system.</p>
                            <button class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i> Register First Company
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            
            
        </div>
    </div>
</x-app-layout>