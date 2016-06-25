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
        	
			<?php require("conexao.php");
			




            $periodo = isset($_POST['periodo'])?mysqli_real_escape_string($conexao,$_POST['periodo']):false;
$sala = isset($_POST['sala'])?mysqli_real_escape_string($conexao,$_POST['sala']):false;
$horario = isset($_POST['horario'])?mysqli_real_escape_string($conexao,$_POST['horario']):false;
$matricula = isset($_POST['matricula'])?mysqli_real_escape_string($conexao,$_POST['matricula']):false;
$codigo_disciplina = isset($_POST['codisc'])?mysqli_real_escape_string($conexao,$_POST['codisc']):false;
$classe = isset($_POST['classe_id'])?mysqli_real_escape_string($conexao,$_POST['classe_id']):false;




$query = "SELECT COUNT(*) from classe";
$inserir = mysqli_query($conexao, $query);
$qtd=mysqli_fetch_row($inserir);


   
if ($qtd[0]>0 && $classe!=false)
{
    $inserir = mysqli_query($conexao, "INSERT INTO classe (periodo,sala,horario,matricula,codisc,classe_id) VALUES ('$periodo', '$sala', '$horario', '$matricula', '$codigo_disciplina', '$classe')");
    if ($inserir) {
        echo "<center><h1><font>Classe cadastrada!</font></h1></center>";
    } else {
        echo "Não foi possível cadastrar uma Classe, tente novamente!";
        // Exibe dados sobre o erro: 
        echo "Dados sobre o erro:" . mysqli_error($conexao);
    }
}
else
   echo "Matricula não cadastrada";


  
  ?>
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