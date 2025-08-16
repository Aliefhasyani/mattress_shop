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
                <h2 class="h3 fw-bold mb-1">EditProduct</h2>
                <p class="text-muted mb-4">Fill out the form below to edit your product</p>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('product.update',$mattress->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="e.g., The Cloud Comfort Mattress" required value="{{old('name',$mattress->name)}}">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="quantity" class="form-label">Quantity in Stock</label>
                            <input id="quantity" name="quantity_in_stock" type="number" class="form-control" placeholder="e.g., 50" required  value="{{old('quantity_in_stock',$mattress->quantity_in_stock)}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Unit Price</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input id="price" name="price" type="number" step="0.01" class="form-control" placeholder="e.g., 999.99" required  value="{{old('price',$mattress->price)}}"> 
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="image_path" class="form-label">Product Image</label>
                        <input id="image_path" name="image_path" type="file" class="form-control" >
                        <small class="form-text text-muted">Leave empty to keep old image.</small>
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Product Description</label>
                        <textarea id="desc" name="desc" class="form-control" rows="3" placeholder="A brief description of the product..." >{{old('desc',$mattress->desc)}}</textarea>
                    </div>

                <div class="mb-4">
                    <label for="company_id" class="form-label">Manufacturer</label>
                    <select id="company_id" name="company_id" class="form-select" aria-label="Select a company">
                        @foreach($company as $value)
                            <option value="{{ $value->id }}"
                                {{ old('company_id', $mattress->company_id) == $value->id ? 'selected' : '' }}>
                                {{ $value->name }}
                            </option>
                        @endforeach
                    </select>
                </div>



                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i> Edit Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>