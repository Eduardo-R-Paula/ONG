<?php

    include_once('config.php');

    if(isset($_POST['atualizar']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['genero'];
        $cursos =  $_POST['cursoss'];
        $data_nasc = $_POST['data_nascimento'];
        $endereco = $_POST['endereco'];
     
        $sqlUpdade = "UPDATE usuarios SET nome ='$nome',senha='$senha',email='$email',sexo='$sexo',cursos='$cursos',data_nasc='$data_nasc',endereco='$endereco' WHERE id='$id'";
    
        $result = $conexao->query($sqlUpdade);
    }
    header('Location: notas.php');
?> 