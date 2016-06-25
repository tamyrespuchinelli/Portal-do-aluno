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

     


<section class="notas">
    <h6> Materiais Didáticos</h6>



    <div id="material">
        <fieldset>
                <legend><strong>Disciplinas</strong></legend>
				
				<?php
					if (isset($_GET['codisc']))
						$codisc = preg_replace("([^A-Za-z0-9]+)","",$_GET['codisc']);
					if (isset($codisc) && !empty($codisc))
					{
						$dir    = 'material/'.$codisc;
						$files1 = scandir($dir);
						foreach ($files1 as $value)
							if ($value != '..')
							echo '<a href="material/'.$codisc.'/'.$value.'">'.$value.'</a>';
					}
					else
					{
						echo "Disc inválida!!!!!111";
					}	
					

				
				?>
        </fieldset>
</div>

    

<a class="but1" href="menu.php">
            <button class="but1">Voltar</button></a>



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