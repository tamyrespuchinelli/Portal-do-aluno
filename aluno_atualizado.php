
<?php $magica="a"; require_once("acesso.php"); ?><!DOCTYPE html>
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
        	
			<?php require("conexao.php");
			


$nome_aluno = isset($_POST['a_nome'])?mysqli_real_escape_string($conexao,$_POST['a_nome']):false;
$matricula_aluno = isset($_POST['a_matricula'])?mysqli_real_escape_string($conexao,$_POST['a_matricula']):false;
$email_aluno = isset($_POST['email'])?mysqli_real_escape_string($conexao,$_POST['email']):false;
$senha_aluno = isset($_POST['senha'])?mysqli_real_escape_string($conexao,$_POST['senha']):false;


$query = "SELECT COUNT(*) from aluno WHERE a_matricula='".$matricula_aluno."'";
$inserir = mysqli_query($conexao, $query);
$qtd=mysqli_fetch_row($inserir);


   
if ($qtd[0]>0 && $matricula_aluno!=false)
{
	$inserir = mysqli_query($conexao, "UPDATE aluno SET  a_nome='$nome_aluno', a_matricula='$matricula_aluno', email='$email_aluno', senha='$senha_aluno' 
    WHERE a_matricula ='$matricula_aluno'");
	if ($inserir) {
		echo "<center><h1><font>Cadastro atualizado!</font></h1></center> <meta http-equiv='refresh' content='4; url=index.php'>";
	} else {
		echo "Não foi possível atualizar o cadastro, tente novamente!";
		// Exibe dados sobre o erro: 
		echo "Dados sobre o erro:" . mysqli_error($conexao);
	}
}
else
   echo "Matricula não cadastrada";


  
  ?>
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