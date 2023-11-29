/*
JavaScript file for the Competitions page
Filename: competitionsJS.js
Date: 11/24/2023
Author: Ethan Campbell
*/

function changeLeague(leagueName) {
    // Update the league name when selected
    document.getElementById('leagueName').innerText = leagueName;
  
    // Update the league image when the name is selected
    let leagueImage;
    switch (leagueName) {
        case 'MLS':
            leagueImage = 'LeagueImages/MLS.png';
            break;
        case 'NWSL':
            leagueImage = 'LeagueImages/NWSL.png';
            break;
        case 'Premier League':
            leagueImage = 'LeagueImages/PremierLeague.png';
            break;
        case 'LA Liga':
            leagueImage = 'LeagueImages/LALiga.png';
            break;
        case 'Bundesliga':
            leagueImage = 'LeagueImages/Bundesliga.png';
            break;
        case 'Serie A':
            leagueImage = 'LeagueImages/SerieA.png';
            break;
        case 'Ligue 1':
            leagueImage = 'LeagueImages/Ligue1.png';
            break;
        case 'Liga MX':
            leagueImage = 'LeagueImages/LigaMX.png';
            break;
        case 'UEFA Champions League':
            leagueImage = 'LeagueImages/ChampionsLeague.png';
            break;
        case 'UEFA Europa League':
            leagueImage = 'LeagueImages/EuropaLeague.png';
            break;
        default:
            leagueImage = 'LeagueImages/MLS.png';
    }
  
    document.getElementById('leagueImage').src = leagueImage;
  }