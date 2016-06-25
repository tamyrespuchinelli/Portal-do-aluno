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
    	<h2>Portal do Aluno</h2>
  		<h3>Seja bem- vindo ao seu novo Portal do Aluno</h3>
    </section><!-- fim .chamada -->
	
    <section class="container-menu">
    	
            

             
           <a class="but-menu" href="acessar-disciplina.php?curso_id=" >Grade</a>
           <a class="but-menu" href="disciplina-logado.php" >Minhas Disciplinas</a>
<a class="but-menu" href="acesso-material-aluno.php" >Materiais</a>
<a class="but-menu" href="atualizar-cadastro.php" >Cadastro</a>


            </div>
       </section><br><!-- fim .container -->

     


<section class="noticias">
    <h4> Notícias</h4>
        <div id="noticia1">
            <a href="noticias.php" target="_blank"> <img src="imagens/noticia1.png"></a></div>

            <div id="noticia2">
            <a href="noticias.php" target="_blank"> <img src="imagens/noticia2.png"></a></div>

            <div id="noticia3">
            <a href="noticias.php" target="_blank"> <img src="imagens/noticia3.png"></a></div>



</section>

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