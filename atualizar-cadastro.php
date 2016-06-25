<?php $magica="a"; require_once("acesso.php"); ?>
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
      <h1><a href="index.php" title="Portal do Aluno"><span></span></a></h1>
        
    </header><!-- fim header -->
    <b>Bem Vindo(a) <?php echo $_SESSION['nome'] ; ?> <a href="logout.php">Sair</a> </b> 
	<section class="chamada">
    	<h2>Portal do Aluno - Cadastro</h2>
  		<h3>Atualize aqui o seu cadastro</h3>
    </section><!-- fim .chamada -->
	<section class="container-atualização">
    	<div class="desktop">
            <div class="form">
        	
			<h3>Atualize o seu cadastro</h3>

           <form action="aluno_atualizado.php" method="POST">
        <fieldset>
            


            <label for="nome" >Nome:</label>
            <input id="nome" name='a_nome' ></input> <br>

             <label for="email">Email:</label>
            <input id="email" name='email'></input> <br>

           <label for="matricula">Matricula:</label>
            <input id="matricula" name='a_matricula'></input> <br>

            <label for="senha">Senha:</label>
            <input id="senha" name='senha'></input> <br>

             
           
            <input type="submit" class="button" value="Atualizar"></input>

            
           
        </fieldset>
    </form>
            </div>

            <a class="but3" href="menu.php">
            <button class="but1">Voltar</button></a>

        </div><!-- fim #desktop -->
        
	</section><!-- fim .container -->
    <footer>
    	<small class="copyright">
        	<p>Copyright © 2015 - Todos os Direitos Reservados à <strong>Tamyres Puchinelli</strong></a></p>
        </small><!-- fim .copyright -->
        <small class="desenvolvedor">
            
        </small><!-- fim .desenvolvedor -->
    </footer><!-- fim footer -->


</script>
</body>
</html>