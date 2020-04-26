<!DOCTYPE html>
<html>

<head>
    <title>Log på SkoleIntra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Log på SkoleIntra">
    <link rel="shortcut icon" type="image/x-icon" href="./media/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./stylesheets/main.css">
</head>

<body>

    <div id="logo">
        <img src="./Header html-css/L-LOGO.png" alt="Logo til SkoleIntra" class="logo-img">
    </div>
    <div id="loginboks">
        <h1>Log Ind</h1>

        <?php
        /* laver diverse fejlbeskeder, baseret på forskellige kriterier */
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p class="signuperror">Udfyld alle felter*</p>';
            } elseif ($_GET['error'] == "sqlerror") {
                echo '<p class="signuperror">Kan ikke i oprette forbindelse til database*</p>';
            } elseif ($_GET['error'] == "wrongcredentials") {
                echo '<p class="signuperror">Forkert brugernavn eller adgangskode*</p>';
            } elseif ($_GET['error'] == "nouser") {
                echo '<p class="signuperror">Denne bruger eksisterer ikke*</p>';
            }
        } elseif (isset($_GET['login'])) {
            if ($_GET['login'] == "success") {
                echo '<p class="signupsuccess">Logget Ind!</p>';
            }
        }
        ?>

        <form id="logind" action="includes/login.inc.php" method="post">
            <input class="inputtekst" type="text" name="uid" autofocus placeholder="Brugernavn">
            <br>
            <br>
            <input class="inputtekst" type="password" name="pwd" placeholder="Adgangskode">
            <br>
            <br>
            <p class="bold">Skole:</p>
            <select name="skole" id="skoleListe">

                <?php
                // går ind i skole database og tilføjer skolenavne til drop-down liste
                require './includes/dbh.inc.php';

                $sql = mysqli_query($conn, "SELECT nameSchools FROM schools");

                while ($row = $sql->fetch_assoc()) {
                    echo '<option value="' . $row['nameSchools'] . '">' . $row['nameSchools'] . '</option>';
                }
                ?>

            </select>
            <br>
            <br>
            <input class="inputknap" name="login-submit" type="submit" value="Log In" />
        </form>
    </div>

</body>

</html>