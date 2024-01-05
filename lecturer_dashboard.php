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
    <title>Faculty Dashboard</title>
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
                        <li class="nav-item">
                            <form class="form-inline mr-auto" method="POST" action="student_search.php" id="search-form">
                                <div class="search-element">
                                    <input type="search" class="form-control" name="search" placeholder="Search Student" aria-label="Search" data-width="200" id="search-input">
                                    <button class="btn" type="submit" id="search-button"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                            <div id="search-results"></div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                const searchForm = document.getElementById("search-form");
                                const searchInput = document.getElementById("search-input");
                                const searchResults = document.getElementById("search-results");
                        
                                searchForm.addEventListener("submit", function (e) {
                                e.preventDefault(); // Prevent the form from submitting the traditional way.

                                const searchQuery = searchInput.value;

                             //AJAX request to search_student.php
                                const xhr = new XMLHttpRequest();
                                xhr.open("POST", "student_search.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                                xhr.onreadystatechange = function () {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                    // Handle the response from student_search.php and update the search results div.
                                    searchResults.innerHTML = xhr.responseText;
                                    }
                                };

                             // Send the search query to search_student.php
                                xhr.send("search=" + searchQuery);
                                });
                            });
                            </script>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img src="assets/img/attendance2.png" alt="image" class="user-img-radius-style">
                            <span class="d-sm-none d-lg-inline-block"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pullUp">
                            <div class="dropdown-title"><?php echo $admin_name; ?> </div>
                            <a href="profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="timeline.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
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
                        <a href="admin_dashboard.php"> <img src="assets/img/attendance.png" class="header-logo" /> <span class="logo-name">Attendance<b class="plus">+</b></span> </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                       <!--  <li class="dropdown active">
                            <a href="#" class="menu-toggle nav-link has-dropdown"> <i data-feather = "briefcase"></i> <span>###</span> </a>
                            <ul class="dropdown-menu">
                                <li> <a href="#" class="nav-link">###</a> </li>
                                <li> <a href="add_logindata.php" class="nav-link">###</a> </li>
                            </ul>
                        </li> -->
                           <li class="dropdown active">
                            <a href="#" class="menu-toggle nav-link has-dropdown"> <i data-feather = "briefcase"></i> <span>Attendance Monitoring</span> </a>
                            <ul class="dropdown-menu">
                                <li> <a href="#" class="nav-link">Mark Attendance </a></li>
                                <li> <a href="#" class="nav-link">View Attendance</a> </li>
                                <li> <a href="#" class="nav-link">Update Attendance</a></li>
                                <li> <a href="#" class="nav-link">Generate Report</a> </li>
                            </ul>
                        </li>
                        <!-- Assignments Dropdown -->
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
		                            <h4>Faculty Information</h4>
		                        </div>
		                        <div class="card-body">
		                        	<ul>
		                        		<li>Name: <?php echo $admin_name?></li>
		                        		<li>Department: Computer Engineering</li>
		                        		<li>Email: <?php echo $admin_name ?>@gmail.com</li>
		                        	</ul>
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <div class="row">
		                <div class="col-12">
		                    <div class="card">
		                        <div class="card-header">
		                            <h4>Teaching Schedule</h4>
		                        </div>
		                        <div class="card-body">
		                            <!--teaching schedule information here -->
		                            <ul>
		                                <li><strong>Course:</strong> Operating System</li>
		                                <li><strong>Day and Time:</strong> Mon 7:30 AM - 9:20 AM</li>
		                                <li><strong>Location:</strong> MB 511</li>
		                            </ul>
		                            <!--more courses and schedules as needed -->
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <div class="row">
		                <div class="col-12">
		                    <div class="card">
		                        <div class="card-header">
		                            <h4>Students</h4>
		                        </div>
		                        <div class="card-body">
		                           <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>ID</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td>Zane Arnold</td>
                                            <td>114821</td>
                                            <td>zane@yahoo.com</td>
                                        </tbody>
                                    </table>
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
		                            <!--calendar widget or content for scheduling and events -->
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