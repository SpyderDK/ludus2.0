<?php
if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';

    $uid = $_POST['uid'];
    $password = $_POST['pwd'];

    if (empty($uid) || empty($password)) {
        header("Location: ../forside.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE uidUsers=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../forside.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $uid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $passcheck = password_verify($password, $row['pwdUsers']);

                if ($passcheck == false) {
                    header("Location: ../forside.php?error=wrongcredentials");
                    exit();
                } elseif ($passcheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];

                    header("Location: ../forside.php?login=success");
                    exit();
                } else {
                    header("Location: ../forside.php?error=wrongcredentials");
                    exit();
                }
            } else {
                header("Location: ../forside.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../forside.php");
    exit();
}
