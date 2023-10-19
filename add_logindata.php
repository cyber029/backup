<?php
include('connection.php');
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $user_id = $_POST["user_id"];
    $password = md5($_POST['password']);
    $role = $_POST["role"];
    $fullname = $_POST["name"];
    $img = $_POST["image"];
    $tel = $_POST["contact"];

    // inserting data into db table
    $query = "INSERT INTO users (user_id, name, role, phoneNumber, password, image_data) VALUES ('$user_id', '$fullname', '$role', '$tel', '$password', '$img')";

    // Execute the query
    if ($dbcon->query($query) === TRUE) {
        echo "User added successfully!";
    } else {
        echo "Error in Uploading Details!" . $query . "<br>" . $conn->error;
    }
    echo'<meta http-equiv="refresh" content="3; url=add_logindata.php" />';

    // Closing database connection
    $dbcon->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="user_id">User Code: </label>
        <input type="text" id="user_id" name="user_id" required><br><br>

        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="role">Role: </label>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="lecturer">Lecturer</option>
            <option value="student">Student</option>
        </select><br><br>

        <label for="contact">Contact No. </label>
        <input type="tel" name="contact" id="contact" required> <br> <br>

        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="image">Upload image: </label>
        <input type="file" name="image" accept="image/*" id="image" required> <br> <br>

        <input type="submit" value="Register">
    </form>

    <script type="text/javascript">
        function validateForm() {
            var user_id = document.getElementById("user_id").value;
            var name = document.getElementById("name").value;
            var role = document.getElementById("role").value;
            var contact = document.getElementById("contact").value;
            var password = document.getElementById("password").value;
            var image = document.getElementById("image").value;
        }
    </script>
</body>
</html>
