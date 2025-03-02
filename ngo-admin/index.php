<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FGN Admin Dashboard</title>
    <!-- Inter Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/inter-ui/3.19.3/inter.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        :root {
            --primary: #3498db;
            --secondary: #2ecc71;
            --dark: #34495e;
            --light: #ecf0f1;
            --danger: #e74c3c;
            --warning: #f39c12;
            --sidebar-width: 250px;
        }

        body {
            background-color: #f5f7fa;
        }

        .mobile-warning {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--dark);
            color: white;
            z-index: 1000;
            padding: 20px;
            text-align: center;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .mobile-warning h1 {
            margin-bottom: 20px;
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            background-color: var(--dark);
            color: white;
            position: fixed;
            height: 100%;
            left: 0;
            top: 0;
            overflow-y: auto;
            transition: all 0.3s;
            z-index: 10;
        }

        .sidebar-header {
            padding: 20px 15px;
            background-color: rgba(0, 0, 0, 0.2);
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header h3 {
            color: var(--light);
            font-weight: 700;
        }

        .sidebar-menu {
            padding: 15px 0;
        }

        .menu-header {
            color: rgba(255, 255, 255, 0.5);
            padding: 10px 25px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .menu-item {
            padding: 12px 25px;
            display: flex;
            align-items: center;
            transition: all 0.3s;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.7);
            cursor: pointer;
        }

        .menu-item:hover, .menu-item.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .menu-item i {
            margin-right: 10px;
            font-size: 1.1rem;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: all 0.3s;
        }

        .topbar {
            background-color: white;
            height: 60px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 5;
        }

        .toggle-sidebar {
            cursor: pointer;
            font-size: 1.5rem;
            margin-right: 15px;
            color: var(--dark);
        }

        .user-info {
            margin-left: auto;
            display: flex;
            align-items: center;
        }

        .user-name {
            margin-right: 10px;
            font-weight: 500;
        }

        .user-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        /* Content Area */
        .content {
            padding: 20px;
        }

        .page-title {
            margin-bottom: 20px;
            color: var(--dark);
        }

        .dashboard-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .stat-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-size: 1.5rem;
        }

        .stat-info h4 {
            margin-bottom: 5px;
            color: var(--dark);
        }

        .stat-primary .stat-icon { background-color: var(--primary); }
        .stat-secondary .stat-icon { background-color: var(--secondary); }
        .stat-warning .stat-icon { background-color: var(--warning); }
        .stat-danger .stat-icon { background-color: var(--danger); }

        .recent-activity {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .view-all {
            color: var(--primary);
            font-size: 0.9rem;
            cursor: pointer;
        }

        .activity-list {
            list-style-type: none;
        }

        .activity-item {
            padding: 12px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }

        .activity-icon {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-size: 1rem;
        }

        .activity-details h5 {
            margin-bottom: 3px;
            color: var(--dark);
        }

        .activity-details p {
            font-size: 0.85rem;
            color: #7f8c8d;
        }

        .activity-time {
            margin-left: auto;
            color: #7f8c8d;
            font-size: 0.85rem;
        }

        /* Content Frames */
        iframe {
            width: 100%;
            height: calc(100vh - 60px);
            border: none;
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .mobile-warning {
                display: flex;
            }
            .dashboard-container {
                display: none;
            }
        }

        @media screen and (min-width: 769px) {
            .sidebar.collapsed {
                width: 70px;
            }
            .sidebar.collapsed .sidebar-header h3,
            .sidebar.collapsed .menu-header,
            .sidebar.collapsed .menu-item span {
                display: none;
            }
            .sidebar.collapsed .menu-item {
                padding: 12px;
                justify-content: center;
            }
            .sidebar.collapsed .menu-item i {
                margin-right: 0;
                font-size: 1.3rem;
            }
            .main-content.expanded {
                margin-left: 70px;
            }
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<!-- In index.html (dashboard) -->
<body data-page="dashboard">
    <!-- Mobile Warning -->
    <div class="mobile-warning">
        <h1>Admin Access Restricted</h1>
        <p>This admin section can only be accessed from a desktop or laptop computer.</p>
        <p>Please use a larger device to manage your NGO website.</p>
    </div>

    <!-- Dashboard Container -->
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h3>FGN Admin</h3>
            </div>
            <div class="sidebar-menu">
                <div class="menu-header">Main</div>
                <a class="menu-item active" data-page="dashboard.html">
                    <i class="fas fa-th-large"></i>
                    <span>Dashboard</span>
                </a>
                <a class="menu-item" data-page="pages.php">
                    <i class="fas fa-file-alt"></i>
                    <span>Pages</span>
                </a>
                <a class="menu-item" data-page="blog.html">
                    <i class="fas fa-blog"></i>
                    <span>Blog Posts</span>
                </a>
                <a class="menu-item" data-page="ourprojects.php">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Our Projects</span>
                </a>
                <a class="menu-item" data-page="gallery.html" href="pages/gallery.html">
                    <i class="fas fa-images"></i>
                    <span>Gallery</span>
                </a>

                <div class="menu-header">Campaigns</div>
                <a class="menu-item" data-page="donations.html">
                    <i class="fas fa-hand-holding-heart"></i>
                    <span>Donations</span>
                </a>
                <a class="menu-item" data-page="volunteers.html">
                    <i class="fas fa-users"></i>
                    <span>Volunteers</span>
                </a>
                <a class="menu-item" data-page="projects.html">
                    <i class="fas fa-project-diagram"></i>
                    <span>Projects</span>
                </a>

                <div class="menu-header">System</div>
                <a class="menu-item" data-page="users.html">
                    <i class="fas fa-user-cog"></i>
                    <span>Users</span>
                </a>
                <a class="menu-item" data-page="settings.html">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content" id="main-content">
            <div class="topbar">
                <div class="toggle-sidebar" id="toggle-sidebar">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="user-info">
                    <div class="user-name">Admin User</div>
                    <div class="user-avatar">A</div>
                </div>
            </div>

            <!-- Content Frame -->
            <div class="content-frame" id="content-frame">
                <!-- Default Dashboard Content -->
                <div class="content">
                    <h2 class="page-title">Dashboard Overview</h2>
                    
                    <div class="dashboard-stats">
                        <div class="stat-card stat-primary">
                            <div class="stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-info">
                                <h4>1,248</h4>
                                <p>Total Volunteers</p>
                            </div>
                        </div>
                        <div class="stat-card stat-secondary">
                            <div class="stat-icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <div class="stat-info">
                                <h4>Rs.24,560</h4>
                                <p>Donations (Monthly)</p>
                            </div>
                        </div>
                        <div class="stat-card stat-warning">
                            <div class="stat-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="stat-info">
                                <h4>12</h4>
                                <p>Upcoming Events</p>
                            </div>
                        </div>
                        <div class="stat-card stat-danger">
                            <div class="stat-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <div class="stat-info">
                                <h4>8</h4>
                                <p>Active Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="recent-activity">
                        <div class="section-header">
                            <h3>Recent Activity</h3>
                            <div class="view-all">View All</div>
                        </div>
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-icon" style="background-color: var(--primary);">
                                    <i class="fas fa-edit"></i>
                                </div>
                                <div class="activity-details">
                                    <h5>Homepage Updated</h5>
                                    <p>Main banner and mission statement updated</p>
                                </div>
                                <div class="activity-time">2 hours ago</div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon" style="background-color: var(--secondary);">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="activity-details">
                                    <h5>New Donation Received</h5>
                                    <p>Anonymous donor contributed $500</p>
                                </div>
                                <div class="activity-time">Yesterday</div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon" style="background-color: var(--warning);">
                                    <i class="fas fa-calendar-plus"></i>
                                </div>
                                <div class="activity-details">
                                    <h5>New Event Created</h5>
                                    <p>Community cleanup scheduled for next month</p>
                                </div>
                                <div class="activity-time">Yesterday</div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon" style="background-color: var(--danger);">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <div class="activity-details">
                                    <h5>New Volunteer Registered</h5>
                                    <p>Sarah Johnson joined as a regular volunteer</p>
                                </div>
                                <div class="activity-time">3 days ago</div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon" style="background-color: var(--primary);">
                                    <i class="fas fa-blog"></i>
                                </div>
                                <div class="activity-details">
                                    <h5>New Blog Post Published</h5>
                                    <p>"Making a Difference: Our Impact in 2025"</p>
                                </div>
                                <div class="activity-time">4 days ago</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Check for mobile devices
        function isMobileDevice() {
            return window.innerWidth < 769;
        }

        // Toggle sidebar functionality
        document.getElementById('toggle-sidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });

        // Navigation functionality
        // Navigation functionality
const menuItems = document.querySelectorAll('.menu-item');
const contentFrame = document.getElementById('content-frame');

menuItems.forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default link behavior
        
        // Remove active class from all items
        menuItems.forEach(mi => mi.classList.remove('active'));
        
        // Add active class to clicked item
        this.classList.add('active');
        
        // Get the page path
        const pagePath = this.getAttribute('data-page');
        
        if (pagePath === 'dashboard.html') {
            // For the dashboard, we'll just show the default content
            window.location.href = 'index.html';
        } else {
            // For other pages, navigate to the page in the pages directory
            window.location.href = 'pages/' + pagePath;
        }
    });
});

        // Check for mobile on load
        window.addEventListener('load', function() {
            if (isMobileDevice()) {
                document.querySelector('.mobile-warning').style.display = 'flex';
                document.querySelector('.dashboard-container').style.display = 'none';
            }
        });

        // Check for mobile on resize
        window.addEventListener('resize', function() {
            if (isMobileDevice()) {
                document.querySelector('.mobile-warning').style.display = 'flex';
                document.querySelector('.dashboard-container').style.display = 'none';
            } else {
                document.querySelector('.mobile-warning').style.display = 'none';
                document.querySelector('.dashboard-container').style.display = 'flex';
            }
        });

        <!-- In index.html -->

    // Load sidebar component
    fetch('components/sidebar.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('sidebar-container').innerHTML = data;
            // After loading sidebar, load shared.js to set active state
            const script = document.createElement('script');
            script.src = 'js/shared.js';
            document.body.appendChild(script);
        });
        
    // Load topbar component
    fetch('components/topbar.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('topbar-container').innerHTML = data;
        });

    </script>
</body>
</html>