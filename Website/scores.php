
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/design.css" />
    <link rel="stylesheet" href="assets/css/scores.css" />
  </head>
  <body class="indexclass">
      <!--nav bar-->
      <header> 
        <img src="assets/images/logo/goalnet.png" alt="Logo" class="header-image"/>
        <nav>
            <ul>
                <li> <a href="index.html">Home</a></li>
                <li> <a href="scores.php">Scores</a></li>
                <li> <a href="competitions.html">Competitions</a></li>
                <li> <a href="discussion.html">Discussion</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
      <div class="score-page-wrapper">
        <div class="page-header">Live Soccer Scores, Fixtures & Results</div>
        <div class="score-wrapper">
          <div class="score-header-wrapper">
            <div class="live-btn">
              <div class="live-box"></div>
              Live (0)
            </div>
            <form class="search-input" method="GET">
              <input
                type="text"
                name="team"
                id=""
                placeholder="Search for matches"
              />
              <button type="submit" style="background: transparent; float: left;" >GO</button>
            </form>
            <div class="calendar-btn">
              <label>
                <form id="calendar_text" type="GET"> 
    <input type="date" name="date" class="date" id="date_picker" onchange="this.form.submit()">
    <img src="assets/images/icons/calender.svg" class="icon-img" />
    View Calendar
</form>
              <!-- View Calender -->
</label>
            </div>
          </div>

          <div class="score-dates">
            <?php
            include("dateRow.php");
            ?>
          </div>

          <div class="competition-outer-wrapper">
            <div class="competition-wrapper">
              <div class="competition-name-wrapper">
                <img src="assets/images/ucl.png" alt="" />
                <p class="competition-name">
                  Europe - UEFA Champions League
                </p>
              </div>
              <div class="round-wrapper">
                <p class="competition-round">Group Stage</p>
                <?php
                include("fetchdata.php");
                ?>
              </div>
            </div>
          </div>

          <div class="competition-outer-wrapper">
            <div class="competition-wrapper">
              <div class="competition-name-wrapper">
                <img src="assets/images/teams/europa.png" alt="" />
                <p class="competition-name">
                  Europe - UEFA Europa Conference League
                </p>
              </div>
              <div class="round-wrapper">
                <p class="competition-round">Group Stage</p>
                <?php
                include("fetchdata.php");
                ?>
              </div>
            </div>
          </div>

          <div class="competition-outer-wrapper">
            <div class="competition-wrapper">
              <div class="competition-name-wrapper">
                <img src="assets/images/epl.png" alt="" />
                <p class="competition-name">
                  England -  English Premier League
                </p>
              </div>
              <div class="round-wrapper">
                <p class="competition-round">Group Stage</p>
                <?php
                include("fetchdata.php");
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
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
</html>
