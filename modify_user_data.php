<?php
include('connection.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $delete = mysqli_query($dbcon, "DELETE FROM users WHERE user_id ='$user_id'");
    if ($delete) {
        echo "<div class='alert alert-success'>Deleted Successfully</div>";
        echo '<meta http-equiv="refresh" content="0.6; url=modify_user_data.php" />';
    } else {
        echo "<div class='alert alert-danger'>Not Deleted</div>" . mysqli_error($dbcon);
    }
}

if (isset($_GET['edit_id'])) {
    $user_id = $_GET['edit_id'];
    $select = mysqli_query($dbcon, "SELECT * FROM users WHERE user_id ='$user_id'");
    $user_data = mysqli_fetch_assoc($select);
}

if (isset($_POST['send'])) {
    $user_id = $_POST["user_id"];
    $fullname = $_POST['name'];
    $password = md5($_POST['password']);
    $role = $_POST["role"];
    $tel = $_POST["phoneNumber"];
    if ($user_id) {
        $update = mysqli_query($dbcon, "UPDATE users SET name='$fullname', password='$password', role='$role', phoneNumber='$tel' WHERE user_id='$user_id'");
        if ($update) {
            echo "<div class='alert alert-success'>Successfully Updated</div> ";
            echo '<meta http-equiv="refresh" content="0.6; url=modify_user_data.php" />';
        } else {
            echo "<div class='alert alert-danger'>Not Saved </div>" . mysqli_error($dbcon);
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modify</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="" method="POST">
                    <div class="text-center">
                        <h2>Users' Details</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>ID</label>
                                <div class="form-line">
                                    <input type="text" name="user_id" class="form-control" placeholder="User ID" value="<?php echo isset($user_data['user_id']) ? $user_data['user_id'] : ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="form-line">
                                    <input type="text" name="name" class="form-control" placeholder="New Name" value="<?php echo isset($user_data['name']) ? $user_data['name'] : ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Role</label>
                                <div class="form-line">
                                    <input type="text" name="role" class="form-control" placeholder="New Role" value="<?php echo isset($user_data['role']) ? $user_data['role'] : ''; ?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Contact</label>
                                <div class="form-line">
                                    <input type="tel" name="phoneNumber" class="form-control" placeholder="New Contact" value="<?php echo isset($user_data['phoneNumber']) ? $user_data['phoneNumber'] : ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="form-line">
                                    <input type="password" name="password" class="form-control" placeholder="New Password" value="<?php echo isset($user_data['password']) ? $user_data['password'] : ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label></label>
                                <div class="form-line">
                                    <button type="submit" name="send" class="btn btn-primary form-control">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> <br>
            </div>
            <div class="col-md-12 table-responsive">
                <table class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>ROLE</th>
                            <th>CONTACT</th>
                            <th>PASSWORD</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = mysqli_query($dbcon, "SELECT * FROM users");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$row['user_id']}</td>";
                            echo "<td>{$row['name']}</td>";
                            echo "<td>{$row['role']}</td>";
                            echo "<td>{$row['phoneNumber']}</td>";
                            echo "<td>{$row['password']}</td>";
                            echo "<td>
                                  <a class='btn btn-danger btn-xs' href='modify_user_data.php?user_id={$row['user_id']}'>Delete</a>
                                  <a class='btn btn-success btn-xs' href='modify_user_data.php?edit_id={$row['user_id']}'>Edit</a>
                                  </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
