<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: linear-gradient(to bottom, #4a6de5, #3b5998);
            color: white;
            padding: 20px 0;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }
        
        .logo {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }
        
        .logo h2 {
            font-weight: 600;
            font-size: 22px;
        }
        
        .nav-links {
            flex: 1;
        }
        
        .nav-item {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .nav-item:hover, .nav-item.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-left: 4px solid white;
        }
        
        .nav-item i {
            margin-right: 15px;
            font-size: 18px;
        }
        
        /* Main Content Styles */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        /* Header Styles */
        .header {
            background-color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .welcome h1 {
            font-size: 24px;
            color: #2c3e50;
            font-weight: 600;
        }
        
        .welcome p {
            color: #7f8c8d;
            font-size: 14px;
        }
        
        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .header-btn {
            background: #4a6de5;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .header-btn:hover {
            background: #3b5998;
        }
        
        .logout-btn {
            background: #e74c3c;
        }
        
        .logout-btn:hover {
            background: #c0392b;
        }
        
        /* Content Area Styles */
        .content {
            padding: 30px;
            flex: 1;
        }
        
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }
        
        .card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .card-title {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(74, 109, 229, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #4a6de5;
            font-size: 20px;
        }
        
        .stat {
            font-size: 32px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
        }
        
        .stat-desc {
            color: #7f8c8d;
            font-size: 14px;
        }
        
        .progress-bar {
            height: 8px;
            background: #ecf0f1;
            border-radius: 4px;
            margin: 15px 0;
            overflow: hidden;
        }
        
        .progress {
            height: 100%;
            background: #4a6de5;
            border-radius: 4px;
        }
        
        /* Activity Feed */
        .activity-feed {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .feed-title {
            font-size: 20px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ecf0f1;
        }
        
        .feed-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #ecf0f1;
        }
        
        .feed-item:last-child {
            border-bottom: none;
        }
        
        .feed-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(74, 109, 229, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #4a6de5;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .feed-content h4 {
            font-size: 16px;
            margin-bottom: 5px;
            color: #2c3e50;
        }
        
        .feed-content p {
            color: #7f8c8d;
            font-size: 14px;
        }
        
        .feed-time {
            color: #95a5a6;
            font-size: 12px;
            margin-top: 5px;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .dashboard-container {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                padding: 10px 0;
            }
            
            .nav-links {
                display: flex;
                overflow-x: auto;
            }
            
            .nav-item {
                padding: 10px 15px;
                border-left: none;
                border-bottom: 4px solid transparent;
            }
            
            .nav-item:hover, .nav-item.active {
                border-left: none;
                border-bottom: 4px solid white;
            }
        }
        
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .header-actions {
                width: 100%;
                justify-content: space-between;
            }
            
            .dashboard-cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <h2><i class="fas fa-chart-line"></i> Dashboard</h2>
            </div>
            <div class="nav-links">
                <a href="#" class="nav-item active">
                    <i class="fas fa-home"></i> Dashboard
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-user"></i> Profile
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-file-alt"></i> Posts
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-chart-bar"></i> Analytics
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-cog"></i> Settings
                </a>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <div class="welcome">
                    <h1></h1>
                   
                </div>
                <div class="header-actions">
                    <button class="header-btn">
                        <i class="fas fa-user"></i> Profile
                    </button>
                    <button class="header-btn">
                        <i class="fas fa-file-alt"></i> Posts
                    </button>

                   <form action="{{ route('logout') }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit" class="header-btn logout-btn">
        <i class="fas fa-sign-out-alt"></i> Logout
    </button>
</form>


                </div>
            </div>
            
            <!-- Content Area -->
            <div class="content">
                <!-- Stats Cards -->
                <div class="dashboard-cards">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Total Visitors</div>
                            <div class="card-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                        <div class="stat">24,589</div>
                        <div class="stat-desc">+12% from last week</div>
                        <div class="progress-bar">
                            <div class="progress" style="width: 65%;"></div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Posts Published</div>
                            <div class="card-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                        <div class="stat">128</div>
                        <div class="stat-desc">+8 this month</div>
                        <div class="progress-bar">
                            <div class="progress" style="width: 45%;"></div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">User Engagement</div>
                            <div class="card-icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="stat">86%</div>
                        <div class="stat-desc">+4% from last month</div>
                        <div class="progress-bar">
                            <div class="progress" style="width: 86%;"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Activity Feed -->
                <div class="activity-feed">
                    <h3 class="feed-title">Recent Activity</h3>
                    
                    <div class="feed-item">
                        <div class="feed-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="feed-content">
                            <h4>New post published</h4>
                            <p>You published a new article "Getting Started with Web Development"</p>
                            <div class="feed-time">2 hours ago</div>
                        </div>
                    </div>
                    
                    <div class="feed-item">
                        <div class="feed-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="feed-content">
                            <h4>New follower</h4>
                            <p>Sarah Johnson started following you</p>
                            <div class="feed-time">5 hours ago</div>
                        </div>
                    </div>
                    
                    <div class="feed-item">
                        <div class="feed-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="feed-content">
                            <h4>Performance update</h4>
                            <p>Your post "React Best Practices" got 245 engagements today</p>
                            <div class="feed-time">Yesterday</div>
                        </div>
                    </div>
                    
                    <div class="feed-item">
                        <div class="feed-icon">
                            <i class="fas fa-comment"></i>
                        </div>
                        <div class="feed-content">
                            <h4>New comment</h4>
                            <p>Mike Thompson commented on your post "CSS Grid Tutorial"</p>
                            <div class="feed-time">2 days ago</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
</body>
</html>