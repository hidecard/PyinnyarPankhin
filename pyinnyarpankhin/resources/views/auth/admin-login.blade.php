<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #2C3E50 0%, #34495E 100%);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            overflow: hidden;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .liquid-container {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .liquid-glass {
            position: relative;
            width: 420px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            z-index: 10;
        }

        .liquid-glass::before {
            content: '';
            position: absolute;
            top: 0;
            left: -40%;
            width: 100%;
            height: 100%;
            background: rgba(52, 73, 94, 0.05);
            transform: skewX(-15deg);
            pointer-events: none;
        }

        .admin-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .admin-header img {
            height: 70px;
            margin-bottom: 15px;
            filter: drop-shadow(0 2px 5px rgba(0,0,0,0.3));
        }

        .admin-header h2 {
            color: #FFFF;
            font-weight: 600;
            letter-spacing: 1px;
            text-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }

        .admin-badge {
            background: linear-gradient(90deg, #E74C3C, #C0392B);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
            display: inline-block;
        }

        .input-group {
            position: relative;
            margin-bottom: 30px;
        }

        .input-group input {
            width: 100%;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            outline: none;
            border-radius: 35px;
            font-size: 16px;
            color: #FFFF;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            border: 1px solid #E74C3C;
        }

        .input-group input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(90deg, #E74C3C, #C0392B);
            border: none;
            outline: none;
            border-radius: 35px;
            color: #FFFF;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(231, 76, 60, 0.4);
            background: linear-gradient(90deg, #C0392B, #E74C3C);
        }

        .form-footer {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .form-footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-footer a:hover {
            color: #FFFF;
            text-decoration: underline;
        }

        .liquid-bubble {
            position: absolute;
            background: rgba(52, 73, 94, 0.1);
            border-radius: 50%;
            filter: blur(5px);
            animation: float 15s linear infinite;
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-1000px) rotate(720deg); }
        }

        .error-message {
            color: #E74C3C;
            text-align: center;
            margin-bottom: 20px;
            font-size: 14px;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
            display: none;
            font-weight: 500;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
    </style>
</head>
<body>
    <div class="liquid-container" id="liquidContainer">
        <div class="liquid-glass">
            <div class="admin-header">
                <span class="admin-badge">ADMIN ACCESS</span>
                <h2>ADMIN PORTAL LOGIN</h2>
            </div>

            @if($errors->any())
                <div class="error-message" style="display: block;">
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            <form id="adminLoginForm" method="POST" action="{{ route('admin.login.post') }}">
                @csrf
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Admin Email" value="{{ old('email') }}" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Admin Password" required>
                </div>

                <button type="submit" class="login-btn" id="loginBtn">ADMIN LOGIN</button>
            </form>

            <div class="form-footer">
                <a href="{{ route('login') }}">Back to Student Portal</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // DOM Elements
            const elements = {
                loginForm: document.getElementById('adminLoginForm'),
                emailInput: document.getElementById('email'),
                passwordInput: document.getElementById('password'),
                loginBtn: document.getElementById('loginBtn'),
                liquidContainer: document.getElementById('liquidContainer')
            };

            // Create floating bubbles
            function createBubbles() {
                const bubbleCount = 15;
                const fragment = document.createDocumentFragment();

                for (let i = 0; i < bubbleCount; i++) {
                    const bubble = document.createElement('div');
                    bubble.classList.add('liquid-bubble');

                    // Random properties
                    const size = Math.random() * 100 + 50;
                    const posX = Math.random() * window.innerWidth;
                    const posY = Math.random() * window.innerHeight + window.innerHeight;
                    const delay = Math.random() * 5;
                    const duration = Math.random() * 10 + 10;
                    const opacity = Math.random() * 0.2 + 0.1;

                    // Apply styles
                    Object.assign(bubble.style, {
                        width: `${size}px`,
                        height: `${size}px`,
                        left: `${posX}px`,
                        top: `${posY}px`,
                        animationDelay: `${delay}s`,
                        animationDuration: `${duration}s`,
                        opacity: opacity
                    });

                    fragment.appendChild(bubble);
                }

                elements.liquidContainer.appendChild(fragment);
            }

            // Form validation
            function validateForm() {
                const fields = [
                    { input: elements.emailInput, message: 'Please enter your admin email' },
                    { input: elements.passwordInput, message: 'Please enter your admin password' }
                ];

                for (const field of fields) {
                    if (field.input.value.trim() === '') {
                        showError(field.message);
                        field.input.focus();
                        return false;
                    }
                }

                // Simple email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(elements.emailInput.value.trim())) {
                    showError('Please enter a valid email address');
                    elements.emailInput.focus();
                    return false;
                }

                hideError();
                return true;
            }

            // Show error message
            function showError(message) {
                const errorDiv = document.querySelector('.error-message');
                if (errorDiv) {
                    errorDiv.textContent = message;
                    errorDiv.style.display = 'block';
                    elements.loginForm.style.animation = 'shake 0.5s';

                    setTimeout(() => {
                        elements.loginForm.style.animation = '';
                    }, 500);
                }
            }

            // Hide error message
            function hideError() {
                const errorDiv = document.querySelector('.error-message');
                if (errorDiv) {
                    errorDiv.style.display = 'none';
                }
            }

            // Form submission handler
            elements.loginForm.addEventListener('submit', function(e) {
                if (!validateForm()) {
                    e.preventDefault();
                }
            });

            // Initialize bubbles
            createBubbles();

            // Responsive bubble adjustment
            window.addEventListener('resize', function() {
                const bubbles = document.querySelectorAll('.liquid-bubble');
                bubbles.forEach(bubble => bubble.remove());
                createBubbles();
            });
        });
    </script>
</body>
</html>
