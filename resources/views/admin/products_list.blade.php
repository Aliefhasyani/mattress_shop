<x-app-layout>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>

    <div class="container py-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Mattress Product List</h2>
            <p class="text-muted">Below is the list of available mattresses and their associated companies.</p>
        </div>

        <div class="card shadow-sm rounded">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Product ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Company</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mattress as $value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->quantity_in_stock }}</td>
                                <td>${{ $value->price }}</td>
                                <td>{{ $value->company->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($mattress->isEmpty())
                        <p class="text-center text-muted mt-4">No mattresses found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
