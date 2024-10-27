<?php
    if(!empty($_GET['id']))
    {
    
        include_once('config.php');
        
        $id = $_GET['id'];
        
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        
        $result = $conexao->query($sqlSelect);

        
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
                $sexo = $user_data['sexo'];
                $cursos =  $user_data['cursos'];
                $data_nasc = $user_data['data_nasc'];
                $endereco = $user_data['endereco'];
            }
            
        }
        else
        {
            header('Location: notas.php');
        }
    }
    else
    {
        header('Location: notas.php'); 
    }    

        
    
    
?>
<style>

#atualizar{
    background-color: #030a06;
    width: 100%;
    border: none;
    padding: 15px;
    color: rgb(255, 255, 255);
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
#atualizar:hover{
    background-color: #030a0628;
}
</style>
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
    <form action="salvar.php" method="POST">
    <div class="d-flex">
              <a href="notas.php" class="botaosair">Sair</a>
      
                </div>    
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Inscreva-se</b></legend>
                <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                    <br><br>
                        <p>Sexo:</p>
                        <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?> required>
                        <label for="feminino">Feminino</label>
                    <br>
                        <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?>  required>
                        <label for="masculino">Masculino</label>
                    <p>Cursos:<p>
                        <select  name="cursoss" id="cursoss">  
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
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>"  required>
                <br><br><br>
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" value='<?php echo $endereco ?>' required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>
                <br><br>
                <a href="alunologin.php">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="atualizar" id="atualizar">
</a>
            </fieldset>
        </form>
    </form>
        </div>
    
</body>
</html>