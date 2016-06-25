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
    	
            

             
           
           <a class="but-menu2" href="selecao-alunos.php" >Seleção de Alunos</a>
<a class="but-menu2" href="materiais-professor.php" >Materiais</a>
<a class="but-menu2" href="atualizar-cadastro-professor.php" >Cadastro</a>
<a class="but-menu2" href="notas-inclusao.php" >Notas</a>

            </div>
       </section><br><!-- fim .container -->

     


<section class="notas">
    <h6> Turmas</h6>
<?php
require('conexao.php');
$professor = $_SESSION['matricula'];


$query = "SELECT disc_nome,classe_id from disciplina inner join classe on disciplina.codisc=classe.codisc where matricula='".$professor."'";
$inserir = mysqli_query($conexao, $query);
while($rowData = mysqli_fetch_array($inserir))
	echo '<a href="selecao-alunos.php?classe_id='.$rowData['classe_id'].'"><button class="button_turma">'.$rowData['disc_nome'].'</button></a>';

?>

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