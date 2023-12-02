<?php
    //connect to database
    $conn = new mysqli('localhost','root','','goalnet');
    if(!$conn)
    {
        die('Connection Failed');
    }
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check if the user exists
    $sql = "SELECT * FROM userlogin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Check if the user exists
        if (mysqli_num_rows($result) == 1) {
            echo "Login successful!";
            // You can redirect the user to another page here
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
?>