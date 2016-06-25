<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Portal do Aluno</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="center clearfix">
    <header>
      <h2><a href="index.php" title="Portal do Aluno"></a></h2>
    
        
    </header><!-- fim header -->
	<section class="chamada">
    	<h2> Login</h2>
  		<h3>Efetue Login para ter acesso á informações</h3>
    </section><!-- fim .chamada -->


    
	<section class="container">
    	<div class="desktop">
            <div class="form">
			<h3><?php
				if (isset($_GET['fEr']) && !empty($_GET['fEr']))
				{
					if ($_GET['fEr'] == 7)
						echo " Voce não possui acesso!";
					elseif ($_GET['fEr'] == 2)
						echo "Preencha os dados";
				}
			?></h3>
	
            <form action="validacao.php" method="post">
                  
           <label for="matricula">Matricula:</label>
            <input type="text" name="matricula" value="" /> <br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" value="" /> <br>

             
           
            <input type="submit" class="button" value="Login"></input><br>
			
			
			<a href="cadastro.php">Cadastre-se</a>

            
           
       
    </form>
            </div>
        </div><!-- fim #desktop -->
        
	</section><!-- fim .container -->
    <footer>
    	<small class="copyright">
        	<p>Copyright © 2016 - Todos os Direitos Reservados à <strong>Tamyres Puchinelli</strong></a></p>
        </small><!-- fim .copyright -->
        <small class="desenvolvedor">
            
        </small><!-- fim .desenvolvedor -->
    </footer><!-- fim footer -->


</script>
</body>
</html>