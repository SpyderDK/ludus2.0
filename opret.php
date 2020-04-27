<!DOCTYPE html>
<html>

<head>
    <title>Opret Bruger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Log på SkoleIntra">
    <link rel="shortcut icon" type="image/x-icon" href="./media/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./stylesheets/main.css">
</head>

<body>

    <div id="logo">
        <img src="./media/L-LOGO ny.png" alt="Logo til SkoleIntra" class="logo-img">
    </div>
    <div id="loginboks">
        <h1>Opret Bruger</h1>
        <?php
        /* laver diverse fejlbeskeder, baseret på forskellige kriterier */
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p class="signuperror">Udfyld alle felter*</p>';
            } elseif ($_GET['error'] == "invalidemailuid") {
                echo '<p class="signuperror">Ugyldig email og brugernavn*</p>';
            } elseif ($_GET['error'] == "invaliduid") {
                echo '<p class="signuperror">Ugyldigt brugernavn*</p>';
            } elseif ($_GET['error'] == "invalidemail") {
                echo '<p class="signuperror">Ugyldig email*</p>';
            } elseif ($_GET['error'] == "passwordcheck") {
                echo '<p class="signuperror">Adgangskoder matcher ikke*</p>';
            } elseif ($_GET['error'] == "usertaken") {
                echo '<p class="signuperror">Brugernavn er taget*</p>';
            } elseif ($_GET['error'] == "sqlerror") {
                echo '<p class="signuperror"> Kan ikke oprette forbindelse til database*</p>';
            }
        } elseif (isset($_GET['signup'])) {
            if ($_GET['signup'] == "success") {
                echo '<p class="signupsuccess">Bruger Oprettet! Du kan nu logge ind.</p>';
            }
        }
        ?>
        <form id="opretbruger" action="includes/signup.inc.php" method="post">
            <input class="inputtekst" type="text" name="uid" autofocus placeholder="Brugernavn">
            <br>
            <br>
            <input class="inputtekst" type="email" name="mail" autofocus placeholder="Email">
            <br>
            <br>
            <input class="inputtekst" type="password" name="pwd" placeholder="Adgangskode">
            <br>
            <br>
            <input class="inputtekst" type="password" name="pwd-repeat" placeholder="Gentag Adgangskode">
            <br>
            <br>
            <p class="bold">Vælg Skole:</p>
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
            <input type="radio" name="rolle" id="lærer" value="lærer" checked>
            <label for="lærer">Lærer</label>
            <input type="radio" name="rolle" id="elev" value="elev">
            <label for="elev">Elev</label>
            <br>
            <br>
            <input class="inputknap" name="signup-submit" type="submit" value="Opret Bruger">
            <br>
            <a href="login.php">Allerede en bruger?</a>
        </form>
    </div>

</body>

</html>