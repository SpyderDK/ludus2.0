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
        <img src="./media/logo ref.png" alt="Logo til SkoleIntra" width="440" height="210">
    </div>
    <div id="loginboks">
        <h1>Opret Bruger</h1>
        <?php
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
            }
        } elseif (isset($_GET['signup'])) {
            if ($_GET['signup'] == "success") {
                echo '<p class="signupsuccess">Bruger Oprettet!</p>';
            }
        }
        ?>
        <form id="opretbruger" action="includes/signup.inc.php" method="post">
            <input class="inputtekst" type="text" name="uid" autofocus placeholder="Brugernavn">
            <br>
            <br>
            <input class="inputtekst" type="text" name="mail" autofocus placeholder="Email">
            <br>
            <br>
            <input class="inputtekst" type="password" name="pwd" placeholder="Adgangskode">
            <br>
            <br>
            <input class="inputtekst" type="password" name="pwd-repeat" placeholder="Gentag Adgangskode">
            <br>
            <br>
            <input class="inputknap" name="signup-submit" type="submit" value="Opret Bruger">
            <br>
            <a href="login.php">Allerede en bruger?</a>
        </form>
    </div>

</body>

</html>