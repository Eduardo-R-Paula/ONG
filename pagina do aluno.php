<?php
  session_start();
  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: alunologin.php');
  }

  
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="UTF-8" ></script>
        <link rel="stylesheet" href="pagina do alunos.css">
       
        <title>Ambiente do aluno</title>
      </head>
      <body> 
      
   
        
          <header>
            <nav>
      
              <div class="menu-btn">
                <i class="fas fa-bars"></i>
              </div>
              <div class="d-flex">
              <a href="sair.php" class="botaosair">Sair</a>
      
                </div>
              <div class="side-bar active">
                <div class="close-btn">
                  <i class="fas fa-times"></i>
                </div>
                <div class="menu">
                  <div class="item"><a href="tabela de horarios.html"><i class="fas fa-desktop"></i>Quadro de Horários</a></div>
                  <div class="item">
                    <a class="sub-btn"><i class="fas fa-table"></i>atividades<i class="fas fa-angle-right dropdown"></i></a>
                    <div class="sub-menu">
                      <a href="https://classroom.google.com/c/NjMwMjIxMTk4OTA3?cjc=i2z3cpp" class="sub-item">Futsal</a>
                      <a href="#" class="sub-item">Handebol</a>
                      <a href="#" class="sub-item">Vôlei</a>
                      <a href="#" class="sub-item">Xadrez</a>
                      <a href="#" class="sub-item">Desenho e pintura</a>
                      <a href="#" class="sub-item">Ping-pong</a>
                      <a href="#" class="sub-item">Reforço escolar</a>
                      <a href="#" class="sub-item">Funcional kids</a>
                      <a href="#" class="sub-item">Aula de violão</a>
                      <a href="#" class="sub-item">Educação financeira e empreendedorismo</a>
                    </div>
                  </div>
                
                    </div>
                  </div>
                 
                </div>
              </div>
      
            </nav>
          </header>

          <script type="text/javascript">
            $(document).ready(function(){
    
              $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
              });
    
              $('.menu-btn').click(function(){
                $('.side-bar').addClass('active');
                $('.menu-btn').css("visibility", "hidden");
              });
    
              $('.close-btn').click(function(){
                $('.side-bar').removeClass('active');
                $('.menu-btn').css("visibility", "visible");
              });
    
            });
        </script>










<script>
    const token = window.localStorage.getItem('token');
    if(token) {
        const body = document.querySelector('body')
        body.style.display = 'block'
    }
    const button = document.querySelector('#logout')
    button.addEventListener('click', () => {
        window.localStorage.removeItem('token')
        window.location.href = "/";
    })
</script>
</html>