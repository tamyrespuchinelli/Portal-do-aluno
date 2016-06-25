<?php $magica="p"; require_once("acesso.php"); ?>
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
      <a href="index.php" title="Portal do Aluno"><span></span></a>
        
    </header><!-- fim header -->
    <b>Bem Vindo(a) <?php echo $_SESSION['nome'] ; ?> <a href="logout.php">Sair</a> </b> 
	<section class="chamada">
    	<h2>Portal do Aluno</h2>
  		<h3>Seja bem- vindo ao seu novo Portal do Aluno</h3>
    </section><!-- fim .chamada -->
	
    <section class="container-menu">
    	
            

             
           
<a class="but-menu2" href="acesso-turmas.php" >Acesso de Alunos</a>           
<a class="but-menu2" href="acesso-material-professor.php" >Materiais</a>
<a class="but-menu2" href="atualizar_cadastro_professor.php" >Cadastro</a>
<a class="but-menu2" href="turmas.php" >Lançar Notas</a>

            </div>
       </section><br><!-- fim .container -->

     


<section class="noticias-professor">
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
        	<p>Copyright © 2016ss - Todos os Direitos Reservados à <strong>Tamyres Puchinelli</strong></a></p>
        </small><!-- fim .copyright -->
        <small class="desenvolvedor">
            
        </small><!-- fim .desenvolvedor -->
    </footer><!-- fim footer -->


</script>
</body>
</html>