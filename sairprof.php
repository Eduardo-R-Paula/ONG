<?php
    session_start();
    unset($_SESSION['emailprof']);
    unset($_SESSION['senhaprof']);
    header("Location: proflogin.php");
    
?>