<?php

/* sørger for at koden kun køre hvis man er kommet ind til koden via login knappen */
if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';

    $uid = $_POST['uid'];
    $password = $_POST['pwd'];
    $school = $_POST['skole'];

    /* fejlkode hvis der ikke er inputtet noget i felterne */
    if (empty($uid) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {
        /* leder efter brugeren inputtet i brugernavnsfeltet */
        $sql = "SELECT * FROM users WHERE uidUsers=? AND schoolUsers=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $uid, $school);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            /* checker om den indtastede kode passer */
            if ($row = mysqli_fetch_assoc($result)) {
                $passcheck = password_verify($password, $row['pwdUsers']);

                if ($passcheck == false) {
                    header("Location: ../login.php?error=wrongcredentials");
                    exit();
                } elseif ($passcheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    $_SESSION['userRole'] = $row['roleUsers'];

                    header("Location: ../login.php?login=success");
                    exit();
                } else {
                    header("Location: ../login.php?error=wrongcredentials");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
    header("Location: ../forside.php");

} else {
    /* hvis man ikke kommer til denne side via opret knappen, bliver man omdiregeret til selve login siden */
    header("Location: ../login.php");
    exit();
}
