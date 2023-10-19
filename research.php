<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Registration</h2>
        <form method="post" action="server_script.php" enctype="multipart/form-data" onsubmit="return validateForm();" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="user_id">User Code:</label>
                <input type="text" class="form-control" id="user_id" name="user_id" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please fill in the User Code.</div>
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please fill in the Name.</div>
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="">Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="lecturer">Lecturer</option>
                    <option value="student">Student</option>
                </select>
                <div class="invalid-feedback">Please select a Role.</div>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please fill in the Password.</div>
            </div>

            <div class="form-group">
                <label for="image">Upload image:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                <div class="invalid-feedback">Please select an image to upload.</div>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js (required for Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function validateForm() {
            // Get input values
            var user_id = document.getElementById("user_id").value;
            var name = document.getElementById("name").value;
            var role = document.getElementById("role").value;
            var password = document.getElementById("password").value;
            var image = document.getElementById("image").value;
            
            // Check if any required field is empty
            if (user_id === "" || name === "" || role === "" || password === "" || image === "") {
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
