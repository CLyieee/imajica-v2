<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imajica Aesthetics - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
                        <a href="#" class="forgot-password">Forgot your password?</a>
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

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Redirect to the dashboard
            window.location.href = '/dashboard'; // Update this path as necessary
        });
    </script>

</body>
</html>
