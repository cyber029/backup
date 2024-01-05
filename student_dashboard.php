<?php
include('connection.php');
session_start();
$admin_name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/attendance.png">
</head>
<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                                <i data-feather="align-justify"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img src="assets/img/matrix.jpg" alt="image" class="rounded-circle">
                            <span class="d-sm-none d-lg-inline-block"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pullUp">
                            <div class="dropdown-title"><?php echo $admin_name; ?> </div>
                            <a href="profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="timeline.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Notifications
                            </a>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="logout.php" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="admin_dashboard.php"> <img src="assets/img/attendance.png" class="header-logo" /> <span class="logo-name">Attendance<b class="plus">+</b></span></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="#" class="menu-toggle nav-link has-dropdown"> <i data-feather = "user-check"></i> <span>Attendance</span> </a>
                            <ul class="dropdown-menu">
                                <li> <a href="#" class="nav-link">View Attendance</a> </li>
                                <li> <a href="#" class="nav-link">Generate Report</a> </li>
                            </ul>
                        </li>
                           <li class="dropdown active">
                            <a href="#" class="menu-toggle nav-link has-dropdown"> <i data-feather = "briefcase"></i> <span>Utilities</span> </a>
                            <ul class="dropdown-menu">
                                <li> <a href="#" class="nav-link">Timetable</a></li>
                                <li> <a href="#" class="nav-link">Feedback</a></li>
                                <!-- <li> <a href="#" class="nav-link"></a> </li> -->
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Attendance</h4>
                                </div>
                                <div class="card-body">
                                    <img src="assets/img/student.png" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Course Information</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Course Name</th>
                                                <th>Instructor</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>C++</td>
                                                <td>Prof. Foram Chovatiya</td>
                                                <td>Mon 9:00 AM - 10:30 AM</td>
                                            </tr>
                                            <tr>
                                                <td>Mobile Computing</td>
                                                <td>Prof. Rushi Raval</td>
                                                <td>Tue 1:00 PM - 2:30 PM</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Upcoming Assignments</h4>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Mobile Computing: Assignment due on Friday.</li>
                                        <li>C++: Research paper due next week.</li>
                                        <!-- Add more assignments here -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Calendar</h4>
                                </div>
                                <div class="card-body">
                                    <!-- Add a calendar widget or content here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraries -->
    <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/index.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
</body>
</html>