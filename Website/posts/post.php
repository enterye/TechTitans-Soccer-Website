<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "goalnet";

// Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Double Checking
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Takes the comment and inserts it into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commentText = $_POST["comment_text"];
    $postId = $_POST["post_id"];

    // SQL query to insert the comment into the database
    $sql = "INSERT INTO comments (post_id, comment_text) VALUES ('$postId', '$commentText')";

    if ($conn->query($sql) === TRUE) {
        echo "New comment added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>