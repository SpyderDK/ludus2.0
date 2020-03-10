<!DOCTYPE html>
<html>

<head>
    <title>Log på SkoleIntra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Log på SkoleIntra">
    <link rel="shortcut icon" type="image/x-icon" href="./media/icon 48x48.ico">
    <link rel="stylesheet" type="text/css" href="./stylesheets/main.css">
</head>

<body>

    <div>
        <div style="text-align: center">
            <img src="./media/logo.png" alt="Logo til SkoleIntra">
        </div>
        <div style="background-color: #DFE1E6; width: 400px; height: 170px; margin-right: auto; margin-left: auto">
            <div style="text-align: center">
                <h1>Log Ind</h1>
            </div>
            <div style="text-align: center">
                <form id="Brugernavn" action="#" method="post">
                    <input type="text" autofocus placeholder="Brugernavn" required>
                    <br>
                    <input type="password" placeholder="Adgangskode" required>
                    <br>
                    <div>
                        <input type="checkbox" value="husk kode" name="husk kode" id="husk kode">
                        <label for="husk kode"><u>Husk Adgangskode?</u></label>
                    </div>
                    <br>
                    <input type="submit" value="Log Ind">
                </form>
            </div>
        </div>
    </div>

</body>

</html>