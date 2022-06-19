<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&amp;family=Bungee&amp;family=Lobster&amp;family=Orbitron:wght@600&amp;family=Press+Start+2P&amp;display=swap" rel="stylesheet">
  <title>SimpleFly</title>
</head>

<body>
  <header>
    <nav>
      <a class="logo" href="#">SimpleFly</a>

      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>

      <ul class="menu">
        <li><a href="sobre">Sobre</a></li>
        <li><a href="explore">Explore</a></li>
        <li><a href="cec">Criadores & Colaboradores</a></li>
        <li><a href="cont">Contato</a></li>
      </ul>
          <button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto"><img src="images/iconlogin.png" alt="Faça o login ou cadastro"></button>
      </nav>
    
  <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Conecte-se</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Cadastro</button>
                </div>
                <form id='login' class='input-group-login'>
                    <input type='text'class='input-field' placeholder='Email' required >
		    <input type='password'class='input-field' placeholder='Senha' required>
		    <input type='checkbox'class='check-box'><span>Lembrar senha</span>
		    <button type='submit'class='submit-btn'>Entrar</button>
		 </form>
		 <form id='register' class='input-group-register'>
		     <input type='text'class='input-field' placeholder=' Nome' required>
		     <input type='text'class='input-field' placeholder='Sobrenome' required>
		     <input type='email'class='input-field' placeholder='Email' required>
		     <input type='password'class='input-field' placeholder='Senha' required>
		     <input type='password'class='input-field' placeholder='Confirme a Senha'  required>
		     <input type='checkbox'class='check-box'><span>Concordo com os termos e condições</span>
                    <button type='submit'class='submit-btn'>Cadastrar</button>
	         </form>
            </div>
        </div>
    </div>
        <script>
    var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
  </header>

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