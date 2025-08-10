<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center">
            <h2 class="font-weight-semibold h4 text-white mb-2 mb-sm-0">
                {{ __('Dashboard Overview') }}
            </h2>
            <div class="text-sm text-white-50">
                Last updated: {{ now()->format('F j, Y, g:i a') }}
            </div>
        </div>
    </x-slot>

    <div class="py-5 bg-light">
        <div class="container">

            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body p-4 d-flex align-items-center">
                            <div class="p-3 me-4 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                                    <path d="M7.752.025A.5.5 0 0 1 8 .5c0 .166-.081.289-.126.398l-5.32 2.502L.126 1.488A.5.5 0 0 1 0 1.05v-1a.5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .252.025zM14.072 2.15l-5.32 2.502c-.045.11-.126.232-.126.398v4.51c0 .166.081.289.126.398l5.32 2.502c.045.11.126.232.126.398v-4.51a.5.5 0 0 1 .252-.025l1.378-.65a.5.5 0 0 1 .252.025v-.9a.5.5 0 0 1-.5-.5h-1a.5.5 0 0 1-.252-.025zM7.752 5.025c.045-.11.126-.232.126-.398V.5a.5.5 0 0 1 .252-.025l1.378-.65a.5.5 0 0 1 .252.025v4.51a.5.5 0 0 1 .126.398l5.32 2.502c.045.11.126.232.126.398v4.51c0 .166-.081.289-.126.398l-5.32 2.502c-.045.11-.126.232-.126.398v-4.51a.5.5 0 0 1-.252.025l-1.378.65a.5.5 0 0 1-.252-.025v-4.51zM8 9.5a.5.5 0 0 1 .252-.025l5.32-2.502c.045-.11.126-.232.126-.398V2.15l-5.32 2.502A.5.5 0 0 1 8 5c0-.166-.081-.289-.126-.398z" />
                                </svg>
                            </div>
                            <div class="ms-3">
                                <h5 class="card-title text-muted mb-1 text-uppercase fw-normal">Products Inventory</h5>
                                <p class="display-4 fw-bold mb-0 text-primary">{{ $mattress }}</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 py-3">
                            <a href="{{ route('products.list') }}" class="small fw-bold text-decoration-none text-primary d-flex align-items-center">
                                View all products
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right ms-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body p-4 d-flex align-items-center">
                            <div class="p-3 me-4 bg-success text-white rounded-circle d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path d="M4 2.5a.5.5 0 0 1 .5-.5h1A.5.5 0 0 1 6 2.5v1A.5.5 0 0 1 5.5 4h-1A.5.5 0 0 1 4 3.5v-1zM7 2.5a.5.5 0 0 1 .5-.5h1A.5.5 0 0 1 9 2.5v1A.5.5 0 0 1 8.5 4h-1A.5.5 0 0 1 7 3.5v-1zM10 2.5a.5.5 0 0 1 .5-.5h1A.5.5 0 0 1 12 2.5v1A.5.5 0 0 1 11.5 4h-1a.5.5 0 0 1-.5-.5v-1z" />
                                    <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm1 14h10V2H3zm2-3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM7.5 11a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM10.5 11a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM5.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM8.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM11.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM7 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM10 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                </svg>
                            </div>
                            <div class="ms-3">
                                <h5 class="card-title text-muted mb-1 text-uppercase fw-normal">Registered Companies</h5>
                                <p class="display-4 fw-bold mb-0 text-success">{{ $companies }}</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 py-3">
                            <a href="{{ route('companies.list') }}" class="small fw-bold text-decoration-none text-success d-flex align-items-center">
                                View all companies
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right ms-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-header border-0 bg-white p-4">
                    <h3 class="h5 font-weight-semibold text-dark mb-0">Quick Actions</h3>
                </div>
                <div class="card-body p-4">
                    <div class="row g-4 text-center">
                        <div class="col-6 col-md-3">
                            <a href="" class="d-flex flex-column align-items-center p-3 text-decoration-none rounded-3 quick-action-item">
                                <div class="p-3 mb-3 bg-light rounded-circle d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-plus-lg text-primary" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                    </svg>
                                </div>
                                <h6 class="mb-0 text-dark">Add New Product</h6>
                                <p class="small text-muted mt-1">Create a new listing</p>
                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <a href="" class="d-flex flex-column align-items-center p-3 text-decoration-none rounded-3 quick-action-item">
                                <div class="p-3 mb-3 bg-light rounded-circle d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-building text-success" viewBox="0 0 16 16">
                                        <path d="M4 2.5a.5.5 0 0 1 .5-.5h1A.5.5 0 0 1 6 2.5v1A.5.5 0 0 1 5.5 4h-1A.5.5 0 0 1 4 3.5v-1zM7 2.5a.5.5 0 0 1 .5-.5h1A.5.5 0 0 1 9 2.5v1A.5.5 0 0 1 8.5 4h-1A.5.5 0 0 1 7 3.5v-1zM10 2.5a.5.5 0 0 1 .5-.5h1A.5.5 0 0 1 12 2.5v1A.5.5 0 0 1 11.5 4h-1a.5.5 0 0 1-.5-.5v-1z" />
                                        <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm1 14h10V2H3zm2-3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM7.5 11a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM10.5 11a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM5.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM8.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM11.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM7 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM10 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                    </svg>
                                </div>
                                <h6 class="mb-0 text-dark">Register Company</h6>
                                <p class="small text-muted mt-1">Add a new supplier</p>
                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <a href="#" class="d-flex flex-column align-items-center p-3 text-decoration-none rounded-3 quick-action-item">
                                <div class="p-3 mb-3 bg-light rounded-circle d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-file-earmark-bar-graph text-info" viewBox="0 0 16 16">
                                        <path d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v6zm-2 0a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v4zm-3 0a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v2z" />
                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                    </svg>
                                </div>
                                <h6 class="mb-0 text-dark">Generate Report</h6>
                                <p class="small text-muted mt-1">Export sales data</p>
                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <a href="#" class="d-flex flex-column align-items-center p-3 text-decoration-none rounded-3 quick-action-item">
                                <div class="p-3 mb-3 bg-light rounded-circle d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-clock-history text-danger" viewBox="0 0 16 16">
                                        <path d="M8.515 1.018a7 7 0 0 0-6.495 5.674l-2.02-.341C-.51 5.65 1.565 1.83 5.485.44a8 8 0 1 1-.94 15.653c-.313-.67-.324-1.284-.047-1.849a6.837 6.837 0 0 0 2.766-3.834 5.992 5.992 0 0 0 0-2.421c-.347-.847-1.423-1.042-2.318-.46a.5.5 0 0 1-.61-.758c1.373-.893 2.955-.583 3.635.854.766 1.639 1.107 3.32.964 4.978-.17 1.866-.99 3.551-2.43 4.881C3.398 15.8 1.48 14.516.48 12.518c-1.12-2.18-.737-4.707.962-6.52A8.001 8.001 0 0 1 8.515 1.018zM8 4a.5.5 0 0 1 .5.5v3h3.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </div>
                                <h6 class="mb-0 text-dark">View Activity Log</h6>
                                <p class="small text-muted mt-1">Review recent changes</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    body {
        background-color: #f0f2f5;
    }
    .text-sm {
        font-size: 0.875rem;
    }
    .text-muted {
        color: #6c757d;
    }
    .card {
        border-radius: 12px;
        transition: all 0.2s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    .display-4 {
        font-size: 3.5rem;
    }
    .text-dark {
        color: #343a40 !important;
    }
    .quick-action-item {
        border: 1px solid #e9ecef;
        transition: all 0.2s ease-in-out;
        box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    }
    .quick-action-item:hover {
        border-color: #dee2e6;
        background-color: #f8f9fa;
        transform: translateY(-3px);
    }
    .bg-light {
        background-color: #f8f9fa !important;
    }
    .bg-primary {
        background-color: #007bff !important;
    }
    .bg-success {
        background-color: #28a745 !important;
    }
    .text-primary {
        color: #007bff !important;
    }
    .text-success {
        color: #28a745 !important;
    }
    .text-info {
        color: #17a2b8 !important;
    }
    .text-danger {
        color: #dc3545 !important;
    }
    .rounded-circle {
        border-radius: 50% !important;
    }
    .d-flex.align-items-center.justify-content-center {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .h-100 {
        height: 100% !important;
    }
    x-slot[name="header"] {
        background-color: #343a40 !important;
        padding: 1.5rem;
        color: white;
    }
</style>