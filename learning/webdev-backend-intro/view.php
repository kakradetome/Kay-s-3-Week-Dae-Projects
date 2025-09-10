<?php
// This page shows all the messages saved in the database

// STEP 1: Connect to the database
$conn = mysqli_connect("localhost", "root", "root", "webdev_intro");

// STEP 2: Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// STEP 3: If a "delete" ID is in the URL, delete that message from the database
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $delete_sql = "DELETE FROM messages WHERE id = $id";
    mysqli_query($conn, $delete_sql);
    header("Location: view.php");
    exit();
}

// STEP 4: Ask the database for all the saved messages
$result = mysqli_query($conn, "SELECT id, name, message, created_at FROM messages ORDER BY created_at DESC");

// STEP 5: Show all the messages in a simple loop
echo "<h1>Submitted Messages</h1>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<hr>";
    echo "<strong>" . htmlspecialchars($row['name']) . ":</strong><br>";
    echo "<em>" . htmlspecialchars($row['message']) . "</em><br>";
    echo "<small>Submitted on: " . $row['created_at'] . "</small><br>";
    echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a> | ";
    echo "<a href='view.php?delete=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>";
}
echo "<p><a href='index.html'>Back to Form</a></p>";

// STEP 6: Close the database connection
mysqli_close($conn);
?>
