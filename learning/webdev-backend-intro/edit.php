<?php
$conn = mysqli_connect("localhost", "root", "root", "webdev_intro");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = intval($_GET['id']);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $update_sql = "UPDATE messages SET name=?, message=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $update_sql);
    mysqli_stmt_bind_param($stmt, "ssi", $name, $message, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: view.php");
    exit();
} else {
    $select_sql = "SELECT name, message FROM messages WHERE id = $id";
    $result = mysqli_query($conn, $select_sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<h1>Edit Message</h1>
<form method="post">
    <label for="name">Name:</label><br>
    <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>"><br><br>
    <label for="message">Message:</label><br>
    <textarea name="message" rows="5" cols="30"><?php echo htmlspecialchars($row['message']); ?></textarea><br><br>
    <input type="submit" value="Save Changes">
</form>
<p><a href="view.php">Back to Messages</a></p>
<?php mysqli_close($conn); ?>
