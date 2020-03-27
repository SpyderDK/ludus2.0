<!DOCTYPE html>
<html>

<?php
require_once "connect_DB.php";
?>

<head>
    <title>Opret bruger</title>
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
        <form id="logind" action="#" method="post">
            <input class="inputtekst" type="text" autofocus placeholder="Brugernavn">
            <br>
            <br>
            <input class="inputtekst" type="password" placeholder="Adgangskode">
            <br>
            <br>
            <input class="inputtekst" type="password" placeholder="Gentag adgangskode">
            <br>
            <br>
            <input class="inputknap" type="submit" value="Opret">
        </form>
    </div>

</body>

</html>