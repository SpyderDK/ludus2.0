<?php
// sørger for at koden kun køre hvis man har fundet siden ved at klikke på 'opret'
if (isset($_POST['signup-submit'])) {
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passrepeat = $_POST['pwd-repeat'];

    // checker om felterne er udfyldte.
    if (empty($username) || empty($email) || empty($password) || empty($passrepeat)) {
        header("Location: ../opret.php?error=emptyfields&uid=" . $username . "&mail=" . $email);
        exit();
    }

    // checker om både email og brugernavn er korrekt
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../opret.php?error=invalidemailuid");
        exit();
    }

    // chekcer om der er indtastet en valid email
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../opret.php?error=invalidemail&uid=" . $username);
        exit();
    }

    // checker om brugernavnet kan bruges
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../opret.php?error=invaliduid&mail=" . $email);
        exit();
    }

    // checker om kodeordene er ens
    elseif ($password !== $passrepeat) {
        header("Location: ../opret.php?error=passwordcheck&uid=" . $username . "&mail=" . $email);
        exit();
    } else {
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../opret.php?error=sqlerror");
            exit();
        } else {
            /* checker om brugernavnet er blevet taget */
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);

            if ($resultcheck > 0) {
                header("Location: ../opret.php?error=usertaken&mail=" . $email);
                exit();
            } else {
                /* tilføjer brugernavn, email og kode til databasen */
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../opret.php?error=sqlerror");
                } else {
                    /* hasher kode før tilføjelse */
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../opret.php?signup=success");
                    exit();
                }
            }
        }
    }
    /* lukker forbindelsen til databasen */
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    /* hvis man ikke kommer til denne side via opret knappen, bliver man omdiregeret til selve opret bruger siden */
} else {
    header("Location: ../opret.php");
    exit();
}
