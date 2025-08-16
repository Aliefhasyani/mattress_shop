<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0" style="background-color: #f8f1e9;">
                    <div class="card-body p-5">
                        <h1 class="display-4 text-center mb-4" style="color: #5d4037;">Welcome!</h1>
                        
                        <div class="text-center mb-4">
                            <div class="border-bottom mx-auto" style="width: 100px; border-color: #a1887f !important;"></div>
                        </div>
                        
                        <p class="lead text-center mb-4" style="color: #4e342e;">
                            Thank you for visiting my mattress e-commerce demo!
                        </p>
                        
                        <div class="p-4 rounded" style="background-color: #efebe9; border-left: 4px solid #8d6e63;">
                            <p class="mb-3" style="color: #3e2723;">
                                This website is a personal project designed to showcase my skills in Laravel development—while it doesn't process real orders, it reflects my ability to build functional, user-friendly web applications.
                            </p>
                            
                            <p class="mb-0" style="color: #3e2723;">
                                I'd greatly appreciate any feedback or suggestions you may have on improving this project or my development approach. Your insights would be invaluable in helping me grow as a developer.
                            </p>
                        </div>
                        
                        <div class="text-center mt-5">
                            <a href="{{route('home')}}" class="btn btn-lg px-4" style="background-color: #6d4c41; color: #fff;">
                                Explore the Demo
                            </a>
                        </div>
                        
                        <p class="text-center mt-4 mb-0" style="color: #5d4037;">
                            Thanks again for checking it out!(login for admin is, email:)
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #efebe9;
        }
        .card {
            border-radius: 10px;
            overflow: hidden;
        }
        .btn:hover {
            background-color: #5d4037 !important;
            transition: all 0.3s ease;
        }
    </style>
</x-app-layout>