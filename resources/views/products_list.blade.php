<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<x-app-layout>
<body class="bg-light">
  <div class="container py-5">

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Our Mattresses") }}
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4">
      @foreach($mattress as $value)
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('storage/' . $value->image_path) }}" class="card-img-top" alt="{{ $value->name }}" style="object-fit: cover; height: 250px;">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $value->name }}</h5>
              <p class="card-text text-muted">{{ $value->desc }}</p>
              <a href="#" class="btn btn-primary mt-auto">Buy Now</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</body>
</x-app-layout>
