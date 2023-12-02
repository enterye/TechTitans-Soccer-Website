<?php
    //save variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    //connect to database
    $conn = new mysqli('localhost','root','','goalnet');
    if($conn->connect_error)
    {
        die('Connection Failed');
    }
    else
    {
        $stmt = $conn->prepare(select * from userlogin where username like ? and password like ?);
        $stmt->bind_param("ss", $username, $password);
        $result = $conn->query($stmt);
        if($result->num_rows > 0)
        {
            echo "user successfully logged in";
        }
        else
        {
            echo "user not found";
        }
    }
?>