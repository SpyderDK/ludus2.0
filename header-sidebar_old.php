<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Log på SkoleIntra">
    <link rel="stylesheet" type="text/css" href="./stylesheets/main.css">
</head>

<body>
    <nav class="sidebar" id="sidebar">
        <a href="forside.php">
            <img src="./media/ikoner/hjemknap.svg" alt="logo til lectio" class="min-logo">
        </a>
        <br>
        <a href="forside.php">
            <img src="./media/ikoner/hjemikon.svg" alt="hjemknap" class="hjem-knap">
        </a>
        <br>
        <a href="#">
            <img src="./media/ikoner/fravær.svg" alt="fraværsknap" class="fravær-knap">
        </a>
        <br>
        <a href="#">
            <img src="./media/ikoner/kalender.svg" alt="kalenderknap" class="kalender-knap">
        </a>
        <br>
        <a href="#">
            <img src="./media/ikoner/beskeder.svg" alt="beskedknap" class="besked-knap">
        </a>
        <br>
        <a href="#">
            <img src="./media/ikoner/opgaver.svg" alt="opgaveknap" class="opgave-knap">
        </a>
        <br>
        <a href="#">
            <img src="./media/ikoner/profil.svg" alt="profilknap" class="profil-knap">
        </a>
        <br>
        <a href="#">
            <img src="./media/ikoner/indstillinger.svg" alt="indstillinger" class="indstillinger">
        </a>
    </nav>

    <div class="topbar" id="topbar">
        <header>
            <nav class="topnav">
                <b>Dashboard</b>
                <span class="ikoner">
                    <ul>
                        <li class="søgikon"><img src="./media/ikoner/søgikon.svg" alt="søgikon"></li>
                        <li class="notif"><img src="./media/ikoner/klokke.svg" alt="notifikationer"></li>
                        <li class="prfico"><img src="./media/ikoner/profilikon.svg" alt="profilikon">
                            <a href="#">Profil</a>
                            <ul class="profildropdown">
                                <li><a href="#">place</a></li>
                                <li><a href="#">place</a></li>
                                <li><a href="#">Log Ud</a></li>
                            </ul>
                        </li>
                    </ul>
                    </form>
                </span>
            </nav>
        </header>
    </div>
</body>



</html>