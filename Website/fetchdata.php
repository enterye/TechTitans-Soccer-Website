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


if (isset($_GET['date'])) {
	$query = "SELECT * FROM `matches` WHERE game_date='".$_GET['date']."' ; ";
}
else if (isset($_GET['team'])){
	$query = "SELECT * FROM `matches` WHERE team1 LIKE '%".$_GET['team']."%' OR team2 LIKE '%".$_GET['team']."%' ; ";
	

}
else{
	$query = "SELECT * FROM `matches`;";
}

$result = mysqli_query($connection, $query);


if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	   echo '
	   <div class="row-round-match">
        <a href="" class="row-match-link">
            <span class="full-time">'.date("h:i", strtotime($row["game_time"])).'</span>
                <div class="team teamA">
                    <div class="name">' .$row["team1"].'</div>
                        <img
                        src="'.$row["team1_logo"].'"
                        alt=""
                        class="team-logo"
                        />
                    </div>
                    <div class="result-wrapper">
                      <div class="scores">
                        <div class="result-team-a">'.$row["team1_goals"].'</div>
                        <div class="result-separator">-</div>
                        <div class="result-team-b">'.$row["team2_goal"].'</div>
                      </div>
                    </div>
                    <div class="team teamB">
                      <div class="name">'.$row["team2"].'</div>
                      <img
                        src="'.$row["team2_logo"].'"
                        alt=""
                        class="team-logo"
                      />
                    </div>
                  </a>
                  <a href="" class="tv-channel-link">
                    <img
                      src="assets/images/teams/espn.png"
                      alt=""
                      class="channel-logo"
                    />
                    <div class="tv-channel-name-wrapper">
                      <p class="channel-name">On ESPN+</p>
                      <p class="channel-cta">Watch here ></p>
                    </div>
                  </a>
                </div>
                ';
}
}
?>
