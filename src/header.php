<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>todo app</title>
        
        <link rel="stylesheet" href="css/styles.css"/>
        <link rel="stylesheet" href="css/confetti.css"/> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href= 
'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' 
         rel='stylesheet'> 
    </head>
    <body>
        <div class="navbar">
            <div id="navbar-left">
                <div class="navbar-element"><a href="index.php">Home</a></div>
                <div class="navbar-element"><a href="#">About</a></div>

                <div class="navbar-element dropdown">
                    <a href="#" class="dropdown-header">Settings</a>
                    <div class="dropdown-content">
                        <a href="assignees.php">Assignees</a>
                        <a href="categories.php">Categories</a>
                    </div> 
                </div>

            </div>
            <div id="navbar-right">
                <div class="navbar-element dropdown"><a href="https://paypal.me/informaticadonatie?country.x=NL&locale.x=en_US">Donate</a></div>

                <div class="navbar-element dropdown">
                    <a href="#" class="dropdown-header">Feeling lucky?</a>
                    <div class="dropdown-content">
                        <a href="https://scratch.mit.edu/projects/1070509086/fullscreen/">Feeling lucky?</a>
                        <a href="https://scratch.mit.edu/projects/1070509086/fullscreen/">Feeling lucky?</a>
                        <a href="https://scratch.mit.edu/projects/1070509086/fullscreen/">Feeling lucky?</a>
                    </div>
                </div>

            </div>
        </div>
        <div id="confetti-container">
            <div class="confetti" style="--hue: 0; --offset-x: 2vw; --offset-y: -10vh; --delay: 0s; --start-left: 5%;"></div>
            <div class="confetti" style="--hue: 60; --offset-x: -3vw; --offset-y: -5vh; --delay: -0.5s; --start-left: 15%;"></div>
            <div class="confetti" style="--hue: 120; --offset-x: 4vw; --offset-y: -15vh; --delay: -1s; --start-left: 25%;"></div>
            <div class="confetti" style="--hue: 180; --offset-x: -1vw; --offset-y: -7vh; --delay: -1.5s; --start-left: 35%;"></div>
            <div class="confetti" style="--hue: 240; --offset-x: 3vw; --offset-y: -3vh; --delay: -2s; --start-left: 45%;"></div>
            <div class="confetti" style="--hue: 300; --offset-x: -2vw; --offset-y: -12vh; --delay: -2.5s; --start-left: 55%;"></div>
            <div class="confetti" style="--hue: 30; --offset-x: 1vw; --offset-y: -8vh; --delay: -3s; --start-left: 65%;"></div>
            <div class="confetti" style="--hue: 90; --offset-x: -4vw; --offset-y: -11vh; --delay: -3.5s; --start-left: 75%;"></div>
            <div class="confetti" style="--hue: 150; --offset-x: 5vw; --offset-y: -6vh; --delay: -4s; --start-left: 85%;"></div>
            <div class="confetti" style="--hue: 210; --offset-x: -5vw; --offset-y: -9vh; --delay: -4.5s; --start-left: 95%;"></div>
            <div class="confetti" style="--hue: 45; --offset-x: -6vw; --offset-y: -14vh; --delay: -0.2s; --start-left: 10%;"></div>
            <div class="confetti" style="--hue: 135; --offset-x: 5vw; --offset-y: -2vh; --delay: -0.7s; --start-left: 20%;"></div>
            <div class="confetti" style="--hue: 225; --offset-x: -4vw; --offset-y: -20vh; --delay: -1.2s; --start-left: 30%;"></div>
            <div class="confetti" style="--hue: 315; --offset-x: 3vw; --offset-y: -18vh; --delay: -1.7s; --start-left: 40%;"></div>
            <div class="confetti" style="--hue: 75; --offset-x: -2vw; --offset-y: -6vh; --delay: -2.2s; --start-left: 50%;"></div>
            <div class="confetti" style="--hue: 165; --offset-x: 1vw; --offset-y: -11vh; --delay: -2.7s; --start-left: 60%;"></div>
            <div class="confetti" style="--hue: 255; --offset-x: -1vw; --offset-y: -4vh; --delay: -3.2s; --start-left: 70%;"></div>
            <div class="confetti" style="--hue: 345; --offset-x: 2vw; --offset-y: -8vh; --delay: -3.7s; --start-left: 80%;"></div>
            <div class="confetti" style="--hue: 105; --offset-x: -5vw; --offset-y: -12vh; --delay: -4.2s; --start-left: 90%;"></div>
            <div class="confetti" style="--hue: 195; --offset-x: 4vw; --offset-y: -3vh; --delay: -4.7s; --start-left: 100%;"></div>
        </div>