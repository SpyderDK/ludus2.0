<?php
/* lukker for login sessionen og diregere en hen til login siden, som fungerer som vores startside */
session_start();
session_unset();
session_destroy();

header("Location: ../dashboard.php");