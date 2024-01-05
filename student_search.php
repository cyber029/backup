<?php
include('connection.php');
session_start();
$admin_name = $_SESSION['name'];

if (isset($_POST['search'])) {
    $search_box = $_POST['search'];
    
    $query = "SELECT * FROM users WHERE user_id = '$search_box'";
    $result = mysqli_query($dbcon, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
        // You can display the student information here or redirect to a student profile page.
        echo "Student found with ID: " . $student['user_id'];
    } else {
        echo "Student not found.";
    }
}
?>
