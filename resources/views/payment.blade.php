<x-app-layout>
    <head>
        <style>
            .checkout-container {
                max-width: 800px;
                margin: 2rem auto;
                padding: 0 1rem;
            }

            .checkout-header {
                text-align: center;
                margin-bottom: 3rem;
            }

            .checkout-title {
                font-family: 'Playfair Display', serif;
                color: #5a3d2b;
                font-size: 2.5rem;
                font-weight: 700;
                margin-bottom: 1rem;
            }

            .checkout-subtitle {
                color: #8b7355;
                font-size: 1.1rem;
            }

            .checkout-form {
                background: white;
                border-radius: 12px;
                padding: 2rem;
                box-shadow: 0 5px 20px rgba(0,0,0,0.05);
                border: 1px solid #e3d9c8;
                max-width: 600px;
                margin: 0 auto;
            }

            .form-section {
                margin-bottom: 2rem;
            }

            .section-title {
                font-family: 'Playfair Display', serif;
                color: #5a3d2b;
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
                padding-bottom: 0.5rem;
                border-bottom: 2px solid #e3d9c8;
            }

            .form-group {
                margin-bottom: 1.5rem;
            }

            .form-label {
                display: block;
                color: #5a3d2b;
                margin-bottom: 0.5rem;
                font-weight: 500;
            }

            .form-control {
                width: 100%;
                padding: 0.75rem 1rem;
                border: 1px solid #e3d9c8;
                border-radius: 8px;
                font-size: 1rem;
                transition: all 0.3s ease;
                background-color: #f8f4ee;
            }

            .form-control:focus {
                outline: none;
                border-color: #b8860b;
                box-shadow: 0 0 0 3px rgba(184, 134, 11, 0.2);
            }

            .card-input {
                padding: 1rem;
                border: 1px solid #e3d9c8;
                border-radius: 8px;
                background-color: #f8f4ee;
                margin-bottom: 1rem;
            }

            .card-row {
                display: flex;
                gap: 1rem;
                margin-bottom: 1rem;
            }

            .card-input-field {
                flex: 1;
                height: 40px;
                padding: 0 1rem;
                border: 1px solid #e3d9c8;
                border-radius: 4px;
                background: white;
            }

            .btn-checkout {
                width: 100%;
                padding: 1rem;
                background: linear-gradient(135deg, #b8860b 0%, #d4af37 100%);
                color: white;
                border: none;
                border-radius: 8px;
                font-size: 1.1rem;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
                margin-top: 1rem;
            }

            .btn-checkout:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(184, 134, 11, 0.3);
            }

            .success-message {
                display: none;
                text-align: center;
                padding: 2rem;
                background: #f0f7f0;
                border-radius: 8px;
                border: 1px solid #c8e6c8;
                margin-top: 2rem;
            }

            .success-icon {
                color: #4caf50;
                font-size: 3rem;
                margin-bottom: 1rem;
            }
        </style>
    </head>

    <div class="checkout-container">
        <div class="checkout-header">
            <h1 class="checkout-title">Payment Information</h1>
            <p class="checkout-subtitle">Enter your payment details to complete your order</p>
        </div>

        <div class="checkout-form">
            <form id="payment-form">
                <div class="form-section">
                    <h2 class="section-title">Billing Information</h2>
                    
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" class="form-control" placeholder="John Doe">
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="john@example.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="address" class="form-label">Street Address</label>
                        <input type="text" id="address" class="form-control" placeholder="123 Main St">
                    </div>
                    
                    <div class="form-group grid grid-cols-2 gap-4">
                        <div>
                            <label for="city" class="form-label">City</label>
                            <input type="text" id="city" class="form-control" placeholder="New York">
                        </div>
                        <div>
                            <label for="zip" class="form-label">ZIP Code</label>
                            <input type="text" id="zip" class="form-control" placeholder="10001">
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h2 class="section-title">Payment Details</h2>
                    
                    <div class="form-group">
                        <label class="form-label">Card Information</label>
                        <div class="card-input">
                            <div class="card-row">
                                <input type="text" class="card-input-field" placeholder="Card Number" maxlength="16">
                            </div>
                            <div class="card-row">
                                <input type="text" class="card-input-field" placeholder="MM/YY" maxlength="5">
                                <input type="text" class="card-input-field" placeholder="CVC" maxlength="3">
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{route('product.buy',$mattress->id)}}">
                        <button type="button" id="mock-pay-button" class="btn-checkout">
                            <i class="fas fa-lock mr-2"></i> Pay Now ${{$mattress->price}}
                        </button>
                    </form>
                </div>
            </form>

            <div id="success-message" class="success-message">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Payment Successful!</h3>
                <p>Thank you for your order.</p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('mock-pay-button').addEventListener('click', function() {
            document.getElementById('payment-form').style.display = 'none';
            document.getElementById('success-message').style.display = 'block';
            document.getElementById('success-message').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
</x-app-layout>