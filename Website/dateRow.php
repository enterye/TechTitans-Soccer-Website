<?php

//specify the server name and here it is localhost
$server_name = "localhost";

//specify the username - here it is root
$user_name = "root";

//specify the password - it is empty
$password = "";

//specify the database name 
$database_name = "scores";

// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

if (!$connection){
	die("Failed". mysqli_connect_error());
}


$query = "SELECT DISTINCT `game_date`FROM `matches` order by game_date ASC";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo ' 
		<a class="score-date" href="?date='.$row["game_date"].'">
            <p>'.$row["game_date"].'</p>
        </a>';

	}
}

?>