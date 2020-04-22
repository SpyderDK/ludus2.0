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
                    echo '<p class="signuperror">Denne bruger eksisterer ikke</p>';
                }
            } elseif(isset($_GET['login'])) {
                if ($_GET['login'] == "success") {
                    
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
            <input type="checkbox" value="husk kode" name="husk kode" id="husk kode">
            <label for="husk kode" class="">Husk Adgangskode?</label>
            <br>
            <input class="inputknap" name="login-submit" type="submit" value="Log Ind">
            <br>
            <a href="opret.php">Opret Bruger</a>
        </form>
    </div>

</body>

</html>