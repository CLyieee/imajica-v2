<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imajica Aesthetics - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            overflow: auto;
            animation: fadeIn 0.3s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .modal-content {
            background-color: rgba(255, 255, 255, 0.95);
            margin: 10% auto;
            padding: 30px;
            border-radius: 16px;
            width: 400px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            position: relative;
            animation: slideIn 0.4s ease-out;
            border-top: 4px solid #4a6cf7;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        
        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .close-modal {
            position: absolute;
            right: 15px;
            top: 10px;
            font-size: 24px;
            cursor: pointer;
            color: #aaa;
            transition: color 0.2s ease;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        
        .close-modal:hover {
            color: #333;
            background-color: rgba(245, 245, 245, 0.7);
        }
        
        .modal-title {
            margin-bottom: 15px;
            text-align: center;
            color: #333;
            font-size: 24px;
            font-weight: 600;
        }
        
        .modal-description {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
            line-height: 1.5;
        }
        
        .modal-form {
            display: flex;
            flex-direction: column;
        }
        
        .modal-form .form-group {
            margin-bottom: 20px;
        }
        
        .modal-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #444;
        }
        
        .modal-form input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid rgba(221, 221, 221, 0.8);
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
            background-color: rgba(255, 255, 255, 0.9);
        }
        
        .modal-form input:focus {
            border-color: #4a6cf7;
            box-shadow: 0 0 0 3px rgba(74, 108, 247, 0.1);
            outline: none;
        }
        
        .modal-form button {
            background-color: #4a6cf7;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.2s;
            margin-top: 10px;
            box-shadow: 0 4px 12px rgba(74, 108, 247, 0.2);
        }
        
        .modal-form button:hover {
            background-color: #3a5ce5;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(74, 108, 247, 0.3);
        }
        
        .modal-form button:active {
            transform: translateY(0);
            box-shadow: 0 2px 8px rgba(74, 108, 247, 0.2);
        }
        
        .modal-icon {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .modal-icon i {
            font-size: 48px;
            color: #4a6cf7;
            background-color: rgba(74, 108, 247, 0.1);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            box-shadow: 0 4px 15px rgba(74, 108, 247, 0.15);
        }
        
        /* Message styles */
        .message {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: none;
        }
        
        .success-message {
            background-color: rgba(76, 175, 80, 0.1);
            color: #2e7d32;
            border: 1px solid rgba(76, 175, 80, 0.3);
        }
        
        .error-message {
            background-color: rgba(244, 67, 54, 0.1);
            color: #c62828;
            border: 1px solid rgba(244, 67, 54, 0.3);
        }
        
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
            vertical-align: middle;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>

<body>
    <div class="page-container">
        <div class="header">
            <h1>IMAJICA AESTHETICS</h1>
        </div>

        <div class="login-container">
            <div class="login-image">
            <img src="{{ asset('logo/imajica.png') }}" alt="Intracode Logo" class="logo" style="width: 150px; height: auto;">
                <h2>Welcome to Imajica</h2>
                <p>Log in to manage and review your Imajica services with ease. Enter your credentials to access your account and stay up-to-date with your information.</p>
            </div>
            <div class="login-content">
                <div class="login-box">
                    <div class="brand">
                        <img src="{{ asset('') }}" alt="Intracode Logo" class="logo" style="width: 150px; height: auto;">
                        <h2>Sign in</h2>
                    </div>

                    <form id="loginForm" class="login-form">

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                        </div>
                        <a href="#" class="forgot-password" id="forgotPasswordLink">Forgot your password?</a>
                        <button type="submit" class="login-btn">SIGN IN</button>
                    </form>

                    @if ($errors->any())
                        <div class="error-messages">
                            @foreach ($errors->all() as $error)
                                <p class="error">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Forgot Password Modal -->
    <div id="forgotPasswordModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-icon">
                <i class="fas fa-key"></i>
            </div>
            <h3 class="modal-title">Reset Your Password</h3>
            <p class="modal-description">Enter your email address and we'll send you a link to reset your password.</p>
            
            <div id="successMessage" class="message success-message">
                <i class="fas fa-check-circle"></i> Password reset link has been sent to your email.
            </div>
            
            <div id="errorMessage" class="message error-message">
                <i class="fas fa-exclamation-circle"></i> <span id="errorText">An error occurred. Please try again.</span>
            </div>
            
            <form id="forgotPasswordForm" class="modal-form">
                <div class="form-group">
                    <label for="resetEmail">Email Address</label>
                    <input type="email" id="resetEmail" name="resetEmail" placeholder="Enter your email" required>
                </div>
                <button type="submit" id="submitButton">Send Reset Link</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Redirect to the dashboard
            window.location.href = '/dashboard'; // Update this path as necessary
        });

        // Modal functionality
        const modal = document.getElementById('forgotPasswordModal');
        const forgotPasswordLink = document.getElementById('forgotPasswordLink');
        const closeModal = document.querySelector('.close-modal');
        const forgotPasswordForm = document.getElementById('forgotPasswordForm');
        const successMessage = document.getElementById('successMessage');
        const errorMessage = document.getElementById('errorMessage');
        const errorText = document.getElementById('errorText');
        const submitButton = document.getElementById('submitButton');

        // Open modal when clicking on "Forgot your password?"
        forgotPasswordLink.addEventListener('click', function(e) {
            e.preventDefault();
            modal.style.display = 'block';
            // Reset form and messages when opening modal
            forgotPasswordForm.reset();
            successMessage.style.display = 'none';
            errorMessage.style.display = 'none';
        });

        // Close modal when clicking on the X
        closeModal.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        // Close modal when clicking outside of it
        window.addEventListener('click', function(e) {
            if (e.target == modal) {
                modal.style.display = 'none';
            }
        });

        // Handle form submission
        forgotPasswordForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('resetEmail').value;
            
            // Show loading state
            submitButton.innerHTML = '<span class="loading"></span> Sending...';
            submitButton.disabled = true;
            
            // Hide any previous messages
            successMessage.style.display = 'none';
            errorMessage.style.display = 'none';
            
            // Send the request to the backend
            fetch('/password/reset', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                },
                body: JSON.stringify({ email: email })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Show success message
                successMessage.style.display = 'block';
                forgotPasswordForm.style.display = 'none';
                
                // Reset button state
                submitButton.innerHTML = 'Send Reset Link';
                submitButton.disabled = false;
                
                // Close modal after 3 seconds
                setTimeout(() => {
                    modal.style.display = 'none';
                    // Reset form for next time
                    forgotPasswordForm.reset();
                    forgotPasswordForm.style.display = 'block';
                }, 3000);
            })
            .catch(error => {
                // Show error message
                errorText.textContent = 'Failed to send reset link. Please try again.';
                errorMessage.style.display = 'block';
                
                // Reset button state
                submitButton.innerHTML = 'Send Reset Link';
                submitButton.disabled = false;
            });
        });
    </script>

</body>
</html>
