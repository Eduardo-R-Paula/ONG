<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['emailprof']) && !empty($_POST['senhaprof']))
    {
    include_once('config.php');
            $emailprof = $_POST['emailprof'];
            $senhaprof = $_POST['senhaprof'];
            
    
        $sql = "SELECT * FROM loginprof WHERE emailprof = '$emailprof' and senhaprof = '$senhaprof'";

        $result = $conexao->query($sql);
       
        if(mysqli_num_rows($result) < 1)
        {
            
           unset($_SESSION['emailprof']);
            unset($_SESSION['senhaprof']);
            header('Location: proflogin.php');
        }
        else
        {
            $_SESSION['emailprof'] = $emailprof;
            $_SESSION['senhaprof'] = $senhaprof;
            header('Location: notas.php');
        }
    }
    else
    {

        header('Location: proflogin.php');
    }
?>