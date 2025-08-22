<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .profile-container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 600px;
            overflow: hidden;
        }
        
        .profile-header {
            background: linear-gradient(to right, #4a6de5, #6e80f0);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .profile-title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .profile-subtitle {
            font-size: 16px;
            opacity: 0.9;
        }
        
        .profile-content {
            padding: 30px;
        }
        
        .info-group {
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px solid #eee;
        }
        
        .info-group:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        
        .info-label {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 8px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .info-value {
            font-size: 18px;
            color: #2c3e50;
            font-weight: 600;
            padding: 12px 15px;
            background: #f8f9fb;
            border-radius: 8px;
            border-left: 4px solid #4a6de5;
        }
        
        .info-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #4a6de5;
        }
        
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 20px;
            padding: 10px 20px;
            background: #4a6de5;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .back-btn:hover {
            background: #3b5998;
            transform: translateY(-2px);
        }
        
        @media (max-width: 600px) {
            .profile-header {
                padding: 25px 20px;
            }
            
            .profile-content {
                padding: 25px 20px;
            }
            
            .info-value {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <h1 class="profile-title">User Profile</h1>
            <p class="profile-subtitle">View and manage your personal information</p>
        </div>
        
        <div class="profile-content">
            <div class="info-group">
                <div class="info-label">
                    <div class="info-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    Full Name
                </div>
                <div class="info-value">{{$user->name}}</div>
            </div>
            
            <div class="info-group">
                <div class="info-label">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    Email Address
                </div>
                <div class="info-value">{{$user->email}}</div>
            </div>
            
            <div class="info-group">
                <div class="info-label">
                    <div class="info-icon">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                    Age
                </div>
                <div class="info-value">  {{$user->age}}</div>
            </div>
            
            <a href="{{route('dashboard')}}" class="back-btn">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </div>

    <script>
        // Simple animation for page load
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.profile-container').style.opacity = '0';
            document.querySelector('.profile-container').style.transform = 'translateY(20px)';
            
            setTimeout(function() {
                document.querySelector('.profile-container').style.transition = 'all 0.5s ease';
                document.querySelector('.profile-container').style.opacity = '1';
                document.querySelector('.profile-container').style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
</body>
</html>