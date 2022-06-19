<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap" rel="stylesheet">

    <title>Simplefly</title>
</head>
<body>
    <header>
        <nav>
        <a class="logo" href="../index.php">SimpleFly</a>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

        <ul class="menu">
            <li><a href="../r1.php">Sobre</a></li>
            <li><a href="explore">Explore</a></li>
            <li><a href="cont">Contato</a></li>
        </ul>
           <a href="2login.php"><button class='loginbtn' display='block' style="width:auto"><img src="../images/iconlogin.png" alt="Faça o login ou cadastro"></button></a> 
        </nav>

        
    
    </header>
    <div id="espace-login">
        <div class="main-container">
            <div class="main-descricao">
                <h1>Simplefly</h1>
                <p>Cadastre-se para receber nossas novidades, sempre que acharmos aplicativos incríveis para você</p>
            </div>
            <div class="main-login">
                <div class="main-card">
                    <form action="#" method="POST">
                        <div>
                            <input type="email" name="email" placeholder="Digite seu e-mail">
                        </div>
                        <div>
                            <input type="password" name="senha" placeholder="Senha">
                        </div>
                        <button type="submit">Cadastre-se</button>
                        <div class="main-link">
                        <?php
                              include_once("conexao.php");

                              //variáveis

                              $email = $_POST['email'];
                              $senha = $_POST['senha'];
                             
      
                              //Código
      
                              if (($email == "") and ($senha == "")){

                                  echo "<p style='color: rgb(255, 94, 0);'>preencha os campos</p>";

                              } else {

                                $sql = "insert into $tabela (email, senha) values ('$email', '$senha')";
      
                                $result = @mysqli_query($conect, $sql);
                                  
                                  if (!$result) {
                                  die ('Query inválida: ' . @mysqli_error($conect));
                                  } else {
                                      @mysqli_close($conect);
                                      echo  "<p style='color: #1ead55'> Cadastrado com sucesso!! </p>";
                                      exit;
                                  }

                              }
      
                              
                            ?>
                            <a href="#">Seus dados estão seguros conosco</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
</div>
    <section class="footer">

<div class="share">
    <a href="#" class="btn">facebook</a>
    <a href="#" class="btn">twitter</a>
    <a href="#" class="btn">instagram</a>
    <a href="#" class="btn">pinterest</a>
    <a href="#" class="btn">linkedin</a>
</div>

<h1 class="credit"> todos os direitos reservados </h1>

</section>
</body>
<script src="barramenu.js"></script>
</html>