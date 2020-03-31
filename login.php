<!DOCTYPE html>
<html>

<?php
require_once "connect_DB.php";
?>

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
        <img src="./media/logo ref.png" alt="Logo til SkoleIntra" width="440" height="210">
    </div>
    <div id="loginboks">
        <h1>Log Ind</h1>
        <form id="logind" action="includes/login.inc.php" method="post">
            <input class="inputtekst" type="text" name="mailuid" autofocus placeholder="Brugernavn">
            <br>
            <br>
            <input class="inputtekst" type="password" name="pwd" placeholder="Adgangskode">
            <br>
            <br>
            <input type="checkbox" value="husk kode" name="husk kode" id="husk kode">
            <label for="husk kode" class="">Husk Adgangskode?</label>
            <br>
            <input class="inputknap" name="login-submit" type="submit" value="Log Ind">
        </form>
    </div>

</body>

</html>