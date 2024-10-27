<?php
    if(!empty($_GET['id']))
    {
    
        include_once('config.php');
        
        $id = $_GET['id'];
        
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        
        $result = $conexao->query($sqlSelect);

        
        if($result->num_rows > 0)
        {
           $sqlDelet = "DELETE FROM usuarios WHERE id=$id";
           $resultDelete = $conexao->query($sqlDelet);
            
        }
    }
    header('Location: notas.php')                                                                                                                                                                                                           
?>