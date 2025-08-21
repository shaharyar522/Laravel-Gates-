<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Professional Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 480px;
            overflow: hidden;
        }

        .header {
            background: #4a6de5;
            padding: 30px;
            text-align: center;
            color: white;
        }

        .header h1 {
            font-weight: 600;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .header p {
            opacity: 0.9;
        }

        .form-container {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #444;
            font-weight: 500;
            font-size: 15px;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 40px;
            color: #777;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s;
        }

        .form-group input:focus {
            border-color: #4a6de5;
            outline: none;
            box-shadow: 0 0 0 3px rgba(74, 109, 229, 0.2);
        }

        .name-fields {
            display: flex;
            gap: 15px;
        }

        .name-fields .form-group {
            flex: 1;
        }

        .btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right, #4a6de5, #6e80f0);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(74, 109, 229, 0.3);
        }

        .btn:hover {
            background: linear-gradient(to right, #3d5dc7, #5c75e0);
            box-shadow: 0 6px 15px rgba(74, 109, 229, 0.4);
            transform: translateY(-2px);
        }

        .btn:active {
            transform: translateY(0);
        }

        .terms {
            margin: 20px 0;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .terms input {
            margin-top: 3px;
        }

        .terms label {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }

        .terms a {
            color: #4a6de5;
            text-decoration: none;
            font-weight: 500;
        }

        .terms a:hover {
            text-decoration: underline;
        }

        .login-link {
            text-align: center;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #666;
            font-size: 15px;
        }

        .login-link a {
            color: #4a6de5;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .password-strength {
            height: 5px;
            background: #eee;
            border-radius: 3px;
            margin-top: 8px;
            overflow: hidden;
        }

        .strength-meter {
            height: 100%;
            width: 0;
            border-radius: 3px;
            transition: width 0.3s;
        }

        .password-criteria {
            margin-top: 8px;
            font-size: 13px;
            color: #666;
        }

        .criterion {
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .criterion i {
            font-size: 12px;
            position: static;
        }

        .valid {
            color: #2ecc71;
        }

        .invalid {
            color: #e74c3c;
        }

        @media (max-width: 500px) {
            .name-fields {
                flex-direction: column;
                gap: 0;
            }

            .container {
                border-radius: 10px;
            }

            .header {
                padding: 25px 20px;
            }

            .form-container {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Create Account</h1>
            <p>Join our community and get started</p>
        </div>

        <div class="form-container">
            <form id="registerForm">
                <div class="name-fields">
                    <div class="form-group">
                        <label for="firstName">Name</label>
                        <i class="fas fa-user"></i>
                        <input type="text" id="firstName" placeholder="Enter your first name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" placeholder="Enter your email address" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" placeholder="Create a strong password" required>
                    <div class="password-strength">
                        <div class="strength-meter" id="strengthMeter"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <i class="fas fa-user-clock"></i>
                    <input type="number" id="age" name="age" placeholder="Enter your age" required>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <i class="fas fa-lock"></i>
                    <input type="password" id="confirmPassword" placeholder="Confirm your password" required>
                </div>

                <div class="terms">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy
                            Policy</a></label>
                </div>

                <button type="submit" class="btn">Create Account</button>

                <div class="login-link">
                    <p>Already have an account? <a href="login.html">Sign in here</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }
            
            // Simulate registration process
            const btn = document.querySelector('.btn');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Creating Account...';
            btn.disabled = true;
            
            setTimeout(function() {
                alert('Account created successfully! You can now login.');
                btn.innerHTML = 'Create Account';
                btn.disabled = false;
                document.getElementById('registerForm').reset();
                resetPasswordStrength();
            }, 1500);
        });
        
        // Password strength indicator
        const passwordInput = document.getElementById('password');
        const strengthMeter = document.getElementById('strengthMeter');
        const lengthIcon = document.getElementById('lengthIcon');
        const numberIcon = document.getElementById('numberIcon');
        const upperIcon = document.getElementById('upperIcon');
        
        passwordInput.addEventListener('input', checkPasswordStrength);
        
        function checkPasswordStrength() {
            const password = passwordInput.value;
            let strength = 0;
            
            // Check length
            if (password.length >= 8) {
                strength += 33;
                lengthIcon.classList.remove('invalid');
                lengthIcon.classList.add('valid');
            } else {
                lengthIcon.classList.remove('valid');
                lengthIcon.classList.add('invalid');
            }
            
            // Check for numbers
            if (/\d/.test(password)) {
                strength += 33;
                numberIcon.classList.remove('invalid');
                numberIcon.classList.add('valid');
            } else {
                numberIcon.classList.remove('valid');
                numberIcon.classList.add('invalid');
            }
            
            // Check for uppercase letters
            if (/[A-Z]/.test(password)) {
                strength += 34;
                upperIcon.classList.remove('invalid');
                upperIcon.classList.add('valid');
            } else {
                upperIcon.classList.remove('valid');
                upperIcon.classList.add('invalid');
            }
            
            // Update strength meter
            strengthMeter.style.width = strength + '%';
            
            // Update color based on strength
            if (strength < 33) {
                strengthMeter.style.background = '#e74c3c';
            } else if (strength < 66) {
                strengthMeter.style.background = '#f39c12';
            } else {
                strengthMeter.style.background = '#2ecc71';
            }
        }
        
        function resetPasswordStrength() {
            strengthMeter.style.width = '0';
            lengthIcon.classList.remove('valid');
            lengthIcon.classList.add('invalid');
            numberIcon.classList.remove('valid');
            numberIcon.classList.add('invalid');
            upperIcon.classList.remove('valid');
            upperIcon.classList.add('invalid');
        }
    </script>
</body>

</html>