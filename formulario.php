<?php
    if(isset($_POST['submit']))
    {
    
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['genero'];
        $cursos =  $_POST['cursoss'];
        $data_nasc = $_POST['data_nascimento'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, sexo, cursos, data_nasc, endereco) VALUES ('$nome','$email','$senha', '$sexo', '$cursos', '$data_nasc','$endereco')");
    
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulariosss.css">
    <title>Inscreva-se</title>
</head>
<body>
    <form action="formulario.php" method="POST">
    <div class="d-flex">
              <a href="sair.php" class="botaosair">Sair</a>
      
                </div>    
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Inscreva-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <p>Cursos:<p>
                <select name="cursoss" id="cursoss"> 
                    <option value="Handebol">Handebol</option> 
                    <option value="Vôlei">Vôlei</option> 
                    <option value="Xadrez">Xadrez</option>
                    <option value="Desenho e pintura">Desenho e pintura</option>
                    <option value="Ping-pong">Ping-pong</option>
                    <option value="Reforço escolar">Reforço escolar</option>
                    <option value="Funcional kids">Funcional kids</option>
                    <option value="Aula de violão">Aula de violão</option>
                    <option value="Educação financeira e empreendedorismo">Educação financeira e empreendedorismo</option>
                </select> 
                <br>
                <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" max="2016-12-31" min="2003-12-31"  id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Rua/Bairro/Numero da Casa</label>
                </div>
                <br><br>
                <a href="alunologin.php">
                <input type="submit" name="submit" id="submit">
</a>
            </fieldset>
        </form>
    </form>
        </div>
    
</body>



</script>
</html>