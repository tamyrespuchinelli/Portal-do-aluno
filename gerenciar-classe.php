<?php $magica="c"; require_once("acesso.php"); ?>
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
      <p><a href="cadastro.php" title="Portal do Aluno"><span></span></a></p>
        
    </header><!-- fim header -->
    <b>Bem Vindo(a) <?php echo $_SESSION['nome'] ; ?> <a href="logout.php">Sair</a> </b> 
	<section class="chamada">
    	<h2>Gerenciador de Disciplina </h2>
  		<h3></h3>
    </section><!-- fim .chamada -->

    <section class="container-menu1">
        
            

             
           
<nav> <ul class="menu"> <li><a href="">Gerenciar Curso</a> <ul> <li><a href="gerenciar-disciplina.php">Disciplinas</a></li><li><a href="gerenciar-professor.php">Professor</a></li><li><a href="gerenciar-classe.php">Classe</a></li></ul><li><a href="gerenciar-noticias.php">Noticias</a>
 <li><a href="#">Consultas</a><ul><li><a href="consultar-alunos.php">Alunos</a></li></ul> <li><a href="atualizar-cadastro-coordenador.php">Cadastro</a></li> </ul> </nav>


       </section><br><!-- fim .container -->
	<section class="container">
    	<div class="desktop">
            <div class="form">
        	
			<h3>Cadastro de Disciplina</h3>

            <form action="classe_cadastrada.php" method="POST">
        <fieldset>
            
           <label for="Periodo">Periodo:</label>
            <input id="periodo" name="periodo" ></input> <br>

            <label for="Sala">Sala:</label>
            <input id="sala" name="sala" ></input> <br>

            <label for="Horario">Horário:</label>
            <input id="horario" name="horario" ></input> <br>

            <label for="matricula">Matricula:</label>
            <input id="matricula" name="matricula" ></input> <br>
			
			Codigo:<select> 
            <option value="codisc">
            <?php require("conexao.php");
             $query ="SELECT codisc from disciplina ";
            $inserir = mysqli_query($conexao, $query);
            while($rowData = mysqli_fetch_array($inserir))

                echo $rowData['codisc'];

             ?>
             </option>
			 </select><br>
            
            

			
			<label for="dia">Dia:</label>
            <input id="dia" name="dia" ></input> <br>

            

             
           
            <input type="submit" class="button" value="Cadastrar"></input>

            
           
        </fieldset>
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