<?php

/* sørger for at koden kun køre hvis man er kommet ind til koden via login knappen */
if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';

    $uid = $_POST['uid'];
    $password = $_POST['pwd'];

    /* fejlkode hvis der ikke er inputtet noget i felterne */
    if (empty($uid) || empty($password)) {
        header("Location: ../dashboard.php?error=emptyfields");
        exit();
    } else {
        /* leder efter brugeren inputtet i brugernavnsfeltet */
        $sql = "SELECT * FROM users WHERE uidUsers=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../dashboard.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $uid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            /* checker om den indtastede kode passer */
            if ($row = mysqli_fetch_assoc($result)) {
                $passcheck = password_verify($password, $row['pwdUsers']);

                if ($passcheck == false) {
                    header("Location: ../dashboard.php?error=wrongcredentials");
                    exit();
                } elseif ($passcheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];

                    header("Location: ../dashboard.php?login=success");
                    exit();
                } else {
                    header("Location: ../dashboard.php?error=wrongcredentials");
                    exit();
                }
            } else {
                header("Location: ../dashboard.php?error=nouser");
                exit();
            }
        }
    }
} else {
    /* hvis man ikke kommer til denne side via opret knappen, bliver man omdiregeret til selve login siden */
    header("Location: ../login.php");
    exit();
}
