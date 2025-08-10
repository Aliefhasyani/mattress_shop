<x-app-layout>
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
            }

            body {
                font-family: 'Poppins', sans-serif;
                background-color: var(--light-bg);
                color: var(--dark-text);
            }

            .container {
                max-width: 1100px;
            }

            .header-section {
                background: linear-gradient(135deg, #ffffff 0%, #e9ecef 100%);
                border-radius: 1rem;
                padding: 2.5rem 2rem;
                margin-bottom: 3rem;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            }
            
            .company-table-card {
                border-radius: 1rem;
                overflow: hidden;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
                border: 1px solid #e9ecef;
            }
            
            .table thead th {
                background-color: #f8f9fa;
                font-weight: 600;
                text-transform: uppercase;
                font-size: 0.75rem;
                letter-spacing: 0.5px;
                border-bottom-width: 2px;
                color: var(--secondary-color);
            }
            
            .table-hover tbody tr {
                transition: background-color 0.2s ease;
            }
            
            .table-hover tbody tr:hover {
                background-color: rgba(74, 105, 189, 0.05);
            }
            
            .table-actions .btn-group {
                border-radius: 0.5rem;
            }
            
            .table-actions .btn {
                padding: 0.4rem 0.6rem;
                font-size: 0.8rem;
            }
            
            .company-size {
                font-weight: 600;
                padding: 0.4em 0.8em;
                border-radius: 50px;
                font-size: 0.75rem;
                text-transform: uppercase;
            }
            
            .company-size.small {
                background-color: #e6f0ff;
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
                color: #ced4da;
                margin-bottom: 1.5rem;
            }
            
            .btn-action {
                border-radius: 50px;
                padding: 0.5rem 1.5rem;
                font-weight: 600;
            }
        </style>
    </head>

    <div class="container py-5">
        <div class="header-section text-center">
            <h1 class="fw-bold mb-2">Registered Companies</h1>
            <p class="lead text-muted mb-4">Manage your network of business partners and manufacturers</p>
            <a href="{{route('company.create')}}" class="btn btn-primary btn-action">
                <i class="fas fa-plus me-2"></i> Add New Company
            </a>
        </div>

        <div class="card company-table-card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    @if($companies->isEmpty())
                        <div class="empty-state">
                            <i class="fas fa-building"></i>
                            <h4 class="mb-3 fw-bold">No Companies Found</h4>
                            <p class="text-muted mb-4">There are currently no companies registered in the system.</p>
                            <a href="#" class="btn btn-primary btn-action">
                                <i class="fas fa-plus me-2"></i> Register First Company
                            </a>
                        </div>
                    @else
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="ps-4">ID</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col" class="text-center">Size</th>
                                    <th scope="col" class="text-center">Mattress Owned</th>
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
                                                     style="width: 50px; height: 50px;">
                                                    <i class="fas fa-building text-muted fa-lg"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0 fw-medium">{{ $value->name }}</h6>
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
                                        <span class="company-size {{ strtolower($value->size) }}">
                                            {{ $value->size }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span class="mattress-count">
                                            {{ $value->count }}
                                        </span>
                                    </td>
                                    <td class="text-end pe-4 table-actions">
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
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