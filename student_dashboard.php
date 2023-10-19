<?php
include('connection.php');

$user_id = 1050; 

$sql = "SELECT image_data FROM users WHERE user_id = ?";
$stmt = $dbcon->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($image_data);

if ($stmt->fetch()) {
    $image_data = base64_encode($image_data);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Dashboard</title>
</head>
<body>
    <h2>Welcome Student!</h2>

    <?php
    if (isset($image_data)) {
        // Display the image using an <img> tag
        echo '<img src="data:image/png;base64,' . $image_data . '" alt="User Image">';
    } else {
        echo "Image not found.";
    }
    ?>
</body>
</html>
