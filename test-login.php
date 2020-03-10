<!DOCTYPE html>
<html>

<head>
    <title>Log på SkoleIntra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Log på SkoleIntra">
    <link rel="shortcut icon" type="image/x-icon" href="./test-media/icon 48x48.ico">
    <link rel="stylesheet" type="text/css" href="./stylesheets/test-main.css">
</head>

<body>

    <div id="logo">
        <img src="./test-media/logo.png" alt="Logo til SkoleIntra">
    </div>
    <div id="loginboks">
        <h1>Log Ind</h1>
        <form id="logind" action="#" method="post">
            <input class="inputtekst" type="text" autofocus placeholder="Brugernavn" required>
            <br>
            <br>
            <input class="inputtekst" type="password" placeholder="Adgangskode" required>
            <br>
            <input type="checkbox" value="husk kode" name="husk kode" id="husk kode">
            <label for="husk kode"><u>Husk Adgangskode?</u></label>
            <br>
            <br>
            <input class="inputknap" type="submit" value="Log Ind">
        </form>
    </div>

</body>

</html>