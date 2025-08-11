<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #8B5E3C;       /* Main brown */
            --primary-light: #f3e9e1;       /* Soft beige highlight */
            --secondary-color: #7b6f66;     /* Warm muted gray */
            --light-bg: #faf6f3;             /* Page background */
            --dark-text: #2e1f14;            /* Dark brown text */
            --border-color: #e0d6cc;         /* Light beige border */
            --success-color: #10b981;
            --error-color: #ef4444;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .auth-container {
            max-width: 480px;
            margin: 0 auto;
            padding: 2rem;
        }

        .auth-card {
            background: white;
            border-radius: 1.5rem;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
        }

        .auth-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .auth-title {
            font-weight: 700;
            font-size: 1.75rem;
            margin-bottom: 0.5rem;
            color: var(--dark-text);
        }

        .auth-subtitle {
            color: var(--secondary-color);
            font-size: 0.95rem;
            margin: 0;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            font-size: 0.9rem;
            color: var(--dark-text);
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.75rem;
            border: 1px solid var(--border-color);
            border-radius: 0.75rem;
            font-size: 0.95rem;
            font-family: 'Poppins', sans-serif;
            transition: all 0.2s ease;
        }

        .form-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(139, 94, 60, 0.1);
            outline: none;
        }

        .input-icon {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
            color: var(--secondary-color);
            font-size: 1rem;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
            text-align: center;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: #75492b; /* Darker brown */
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139, 94, 60, 0.2);
        }

        .auth-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
        }

        .auth-link {
            color: var(--primary-color);
            font-size: 0.9rem;
            font-weight: 500;
            text-decoration: none;
        }

        .auth-link:hover {
            text-decoration: underline;
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.85rem;
            margin-top: 0.25rem;
        }

        .status-message {
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--secondary-color);
            cursor: pointer;
        }
    </style>
</head>
    

<body>
    <div class="d-flex align-items-center min-vh-100 py-5">
        <div class="auth-container">
            <div class="auth-card">
         
                <div class="auth-header">
                    <h1 class="auth-title">Create Account</h1>
                    <p class="auth-subtitle">Join us to get started</p>
                </div>


                @if (session('status'))
                    <div class="status-message">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

       
                    <div class="form-group">
                        <i class="fas fa-user input-icon"></i>
                        <input 
                            id="name" 
                            type="text" 
                            name="name" 
                            class="form-input" 
                            placeholder="Your full name"
                            value="{{ old('name') }}" 
                            required 
                            autofocus 
                            autocomplete="name"
                        >
                        @if($errors->has('name'))
                            <div class="error-message">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                
                    <div class="form-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            class="form-input mb-3" 
                            placeholder="Your email address"
                            value="{{ old('email') }}" 
                            required 
                            autocomplete="email"
                        >
                        @if($errors->has('email'))
                            <div class="error-message">{{ $errors->first('email') }}</div>
                        @endif


       
                    <div class="form-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input 
                            id="password" 
                            type="password" 
                            name="password" 
                            class="form-input" 
                            placeholder="Create password"
                            required 
                            autocomplete="new-password"
                        >
                        <i class="fas fa-eye password-toggle" onclick="togglePassword('password')"></i>
                        @if($errors->has('password'))
                            <div class="error-message">{{ $errors->first('password') }}</div>
                        @endif
                    </div>

        
                    <div class="form-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input 
                            id="password_confirmation" 
                            type="password" 
                            name="password_confirmation" 
                            class="form-input" 
                            placeholder="Confirm password"
                            required 
                            autocomplete="new-password"
                        >
                        <i class="fas fa-eye password-toggle" onclick="togglePassword('password_confirmation')"></i>
                        @if($errors->has('password_confirmation'))
                            <div class="error-message">{{ $errors->first('password_confirmation') }}</div>
                        @endif
                    </div>

                   
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>

                    
                    <div class="auth-footer ">
                        <a class="auth-link " href="{{ route('login') }}">
                            Already have an account?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            const icon = event.currentTarget;
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>
</body>