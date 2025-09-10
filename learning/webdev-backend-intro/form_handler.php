<?php
$conn = mysqli_connect("localhost", "root", "root", "webdev_intro");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['name'] ?? '';
$message = $_POST['message'] ?? '';
$sql = "INSERT INTO messages (name, message) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $name, $message);
mysqli_stmt_execute($stmt);
echo "<h2>Thank you, $name!</h2>";
echo "<p>Your message has been saved in the database.</p>";
echo "<p><a href='index.html'>Submit Another</a> | <a href='view.php'>View All Messages</a></p>";
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
