<!--

Tech Titans Soccer Website, Competitions page

Author: Ethan Campbell
Date: 11-2-2023
Class: CSCI 426
file: competitions.php
    
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--Set sizing to be consistent and readable on mobile devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        /*CSS styles for league banners and matchup information*/
        .league-banner {
            background-color: #815355;
            color: #F2B418;
            padding: 5px;
            width: 75%; /*Adjust width of banner*/
            border-radius: 20px;

            /*Centers the banner*/
            margin-left: auto;
            margin-right: auto;

            /*Add space on the top and bottom of banner*/
            margin-top: 1%;
            margin-bottom: 1%;

            display: flex;
        }

        .matchup {
            border: 2px solid #ddd; /*Add solid white border around div*/
            border-radius: 15px;
            padding: 5px;
            margin: 10px auto;
            max-width: 60%; /*Set maximum width of the matchup div*/
            text-align: center; /*Align text to the center */
            display: flex; /*Use flexbox for the layout*/
            align-items: center; /*Center items vertically*/
        }

        .team-left {
            text-align: left; /*Align text on the left*/
            font-size: 14px; /*Adjust font size*/
        }

        .team-right {
            text-align: right; /*Align text on the right*/
            font-size: 14px; /*Adjust font size*/
        }

        .info-middle {
            font-weight: bold; /*Make the text bold*/
            font-size: 15px; /*Adjust font size*/
            text-align: center; /*Align text in the middle*/
            flex: 5;
        }

    </style>
    <title>Competitions</title> <!--Title of webpage-->
    <link rel="stylesheet" href="competitionsDesign.css"> <!--Link css file-->
</head>

<body>
    <header>
        <img src="goalnet.png" alt="Logo" class="header-image" /> <!--Goalnet logo-->
        <!--Main navigation bar-->
        <nav>
            <ul>
                <li> <a href="index.html">Home</a></li>
                <li> <a href="scores.html">Scores</a></li>
                <li> <a href="competitions.php">Competitions</a></li>
                <li> <a href="discussion.html">Discussion</a></li>
            </ul>
        </nav>
    </header>

    <!--Div that displays the text: "Upcoming Matchups"-->
    <div class="upcoming-matchups">
        <p>Upcoming Matchups</p>
    </div>

    <!--Embedded php-->
    <?php
    //specify the server name
    $server_name = "localhost";

    //specify the username
    $user_name = "root";

    //specify the password
    $password = "";

    //specify the database name 
    $database_name = "competitionsdb";

    // Creating the connection by specifying the connection details
    $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

    if (!$conn) {
        die("Failed" . mysqli_connect_error());
    }

    //Select from the competitions mysql table
    $sql = "SELECT * FROM competitions";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $currentLeague = null;

        while ($row = $result->fetch_assoc()) {
            // Display league banner
            if ($row['league'] != $currentLeague) {
                // Close the previous league banner if it exists
                if ($currentLeague !== null) {
                    echo "</div>";
                }

                echo "<div class='league-banner'>";
                echo "<h2>{$row['league']}</h2>";
                echo "</div>";

                $currentLeague = $row['league'];
            }

            // Display the matchups and their information
            echo "<div class='matchup'>";
            echo "<div class='team-left'>{$row['team1']}</div>";
            echo "<div class='info-middle'>";
            echo "<p>Date/Time: {$row['time']}</p>";
            echo "<p>Location: {$row['location']}</p>";
            echo "</div>";
            echo "<div class='team-right'>{$row['team2']}</div>";
            echo "</div>";
        }
        echo "</div>";
    } 
    
    else {
        echo "<p>No upcoming matchups found.</p>";
    }
    
    $conn->close(); //close the connection
    ?>

    <!--Footer for the website. Has links to contacts, privacy policy, TOS, Careers, social media accounts and the shop-->
    <footer>
        <p>&copy; 2023 Tech Titans</p>
        <nav class="footer-nav">
            <ul>
                <li> <a href="https://www.goal.com/en-us/contact">Contact Us</a></li>
                <li> <a href="https://www.goal.com/en-us/legal/privacy-policy">Privacy Policy</a></li>
                <li> <a href="https://www.goal.com/en-us/legal/terms-conditions">Terms of Service</a></li>
                <li> <a href="https://www.linkedin.com/company/footballco/jobs/">Careers</a></li>
                <li> <a href="https://twitter.com/TheGoalNet45">Social</a></li>
                <li> <a href="https://en.goalstudio.com/category/shop/69/">Shop</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>