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

            .form-card {
                max-width: 800px;
                margin: 3rem auto;
                padding: 2.5rem;
                border-radius: 1rem;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
                border: 1px solid #e9ecef;
            }

            .form-control,
            .form-select {
                border-radius: 0.5rem;
                padding: 0.75rem 1rem;
                font-size: 1rem;
            }

            .form-label {
                font-weight: 600;
                color: var(--dark-text);
            }

            .btn-primary {
                background-color: var(--primary-color);
                border-color: var(--primary-color);
                font-weight: 600;
                padding: 0.75rem 1.5rem;
                border-radius: 0.5rem;
            }

            .btn-primary:hover {
                background-color: #3b5998;
                border-color: #3b5998;
            }

            .btn-secondary {
                font-weight: 600;
                padding: 0.75rem 1.5rem;
                border-radius: 0.5rem;
            }
        </style>
    </head>

    <div class="container py-5">
        <div class="card form-card">
            <div class="card-header bg-white border-0 text-center pb-0">
                <h2 class="h3 fw-bold mb-1">Create New Product</h2>
                <p class="text-muted mb-4">Fill out the form below to add a new mattress to your inventory.</p>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('company.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Company Name</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="PT. Company" required>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="company_email" class="form-label">Company Email</label>
                            <input id="company_email" name="company_email" type="email" class="form-control" placeholder="company@gmail.com" required>
                        </div>
                       
                    </div>

                    <div class="mb-3">
                        <label for="company_phone_number" class="form-label">Company Phone Number</label>
                        <input id="company_phone_number" name="company_phone_number" type="text" class="form-control">
                    </div>

                

                    <div class="mb-4">
                        <label for="size" class="form-label">Company Size</label>
                        <select  name="size" class="form-select" aria-label="Select company size">
                            <option>Startup</option>
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Big</option>
                        </select>
                       
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i> Save 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>