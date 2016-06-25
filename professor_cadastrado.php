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
    	<h2>Cadastro de Professor </h2>
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
			

$curso_professor =  isset($_POST['curso_id'])?mysqli_real_escape_string($conexao,$_POST['curso_id']):false;
$nome_professor =  isset($_POST['p_nome'])?mysqli_real_escape_string($conexao,$_POST['p_nome']):false;
$matricula_professor =  isset($_POST['matricula'])?mysqli_real_escape_string($conexao,$_POST['matricula']):false;
$email_professor =  isset($_POST['email'])?mysqli_real_escape_string($conexao,$_POST['email']):false;
$senha_professor =  isset($_POST['senha'])?mysqli_real_escape_string($conexao,$_POST['senha']):false;


$query = "SELECT COUNT(*) from Professor WHERE matricula='".$matricula_professor."'";
$inserir = mysqli_query($conexao, $query);
$qtd=mysqli_fetch_row($inserir);
   
if ($qtd[0]<1 && $matricula_professor!=false)
{
  $inserir = mysqli_query($conexao, "INSERT INTO Professor (curso_id, p_nome, matricula, email, senha) VALUES ('$curso_professor','$nome_professor','$matricula_professor','$email_professor','$senha_professor')");
  if ($inserir) {
    echo "<center><h1><font>Professor cadastrado com sucesso!</font></h1></center> <meta http-equiv='refresh' content='5; url=index.php'>";
  } else {
    echo "Não foi possível realizar um novo cadastro, tente novamente!";
    // Exibe dados sobre o erro: 
    echo "Dados sobre o erro:" . mysqli_error($conexao);
  }
}
else
   echo "Matricula já cadastrada";


  
  
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