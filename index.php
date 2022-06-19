<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&amp;family=Bungee&amp;family=Lobster&amp;family=Orbitron:wght@600&amp;family=Press+Start+2P&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="images/logo-origami.png" type="image/x-icon">
  <title>SimpleFly</title>
</head>

<body>
  <header>
    <nav>
      <a class="logo" href="index.html">SimpleFly</a>

      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>

      <ul class="menu">
        <li><a href="r1.html">Sobre</a></li>
        <li><a href="explore">Explore</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
         <a href="pag/2login.php"><button class='loginbtn'  style="width:auto"><img src="images/iconlogin.png" alt="Faça o login ou cadastro"></button></a> 
      </nav>
    
 
  </header>

  <section class="tudo" id="tudo">

  <div class="sobre" > 
   <h1>Este é o SimpleFly</h1>
   <p>Uma plataforma que te ajuda a encontrar os melhores aplicativos de organização de forma rápida e precisa</p>
  </div>

  <div class="image">
    <img src="images/logo.png" alt="Imagem ilustraitva sobre organização">
  </div>
  
  </section>

<section class="explore" id="explore">

    <h1 class="title"> Explore </h1>

    <div class="box-container">

      <div class="box">
        <a ></a>
          <div class="content">
         
            <h3>Focus</h3>
            <p>São aplicativos que impoem um dos maiores desafios- ficar longe do celular  - Esses app's te ajudam a focar criando um ambiente novo conforme você passa mais tempo longe do celular ao cronometrar seu progresso</p>

            <button href="r1.html" type='submit'class='submit-btn'>Vamos ver</button>
          </div>   
      </div>

      <div class="box">
        <div class="content">

            <h3>Habit Tracker</h3>
            <p>Esses aplicativos funcionam como rastreadores de hábitos, eles te ajudam a manter uma rotina como o controle e resgistro de hábitos. Além de que você pode acompanhar sua evolução conforme o tempo passa</p>

            <a href="https://youtube.com/crywolf"><button  type='submit'class='submit-btn'>Vamos ver</button></a>
          </div>
        </div>

      <div class="box">
        <div class="content">

            <h3>To-do List</h3>
            <p>São listas de tarefas virtuais que te ajudam a organizar as atividades diárias por categorias, prioridades e de execução única</p>

            <button href="p2.html" type='submit'class='submit-btn'>Vamos ver</button>
          </div>
        </div>

      <div class="box">
        <div class="content">

            <h3>Diário Virtual</h3>
            <p>Diários virtuais tem como objetivo a organização de seus sentimentos, servem para guardar momentos especiais e extravasar se necessário</p>

            <button href="p2.html" type='submit'class='submit-btn'>Vamos ver</button>
          </div>
        </div>      
     </div>
</section>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/tef.jpeg" alt="Sthefany - T.I">
      <div class="container">
        <h2>Sthefany</h2>
        <p class="title">T.I</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/lorena.jpeg" alt="Lorena - Designer">
      <div class="container">
        <h2>Lorena</h2>
        <p class="title">Designer</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/team3.jpg" alt="Rafael - T.I">
      <div class="container">
        <h2>Rafael</h2>
        <p class="title">T.I</p>
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

  <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
  <script src="barramenu.js"></script>
</body>
</html>