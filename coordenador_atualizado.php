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
      <p><a href="index.php" title="Portal do Aluno"><span></span></a></p>
        
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
			

$nome_coordenador = isset($_POST['c_nome'])?mysqli_real_escape_string($conexao,$_POST['c_nome']):false;
$email_coordenador = isset($_POST['email'])?mysqli_real_escape_string($conexao,$_POST['email']):false;
$matricula_coordenador = isset($_POST['c_matricula'])?mysqli_real_escape_string($conexao,$_POST['c_matricula']):false;
$senha_coordenador = isset($_POST['senha'])?mysqli_real_escape_string($conexao,$_POST['senha']):false;
   
   $query = "SELECT COUNT(*) from coordenador WHERE c_matricula='".$matricula_coordenador."'";
$inserir = mysqli_query($conexao, $query);
$qtd=mysqli_fetch_row($inserir);


   
if ($qtd[0]>0 && $matricula_coordenador!=false)
{
	$inserir = mysqli_query($conexao, "UPDATE coordenador SET c_nome='$nome_coordenador', c_matricula='$matricula_coordenador',  email='$email_coordenador', senha='$senha_coordenador' 
 WHERE c_matricula =$matricula_coordenador']");
	if ($inserir) {
		echo "<center><h1><font>Cadastro atualizado!</font></h1></center>";
	} else {
		echo "Não foi possível atualizar o cadastro, tente novamente!";
		// Exibe dados sobre o erro: 
		echo "Dados sobre o erro:" . mysqli_error($conexao);
	}
}
else
   echo "Matricula não cadastrada";

  
  ?>
            </div>

            <a class="but3" href="menu-coordenador.php">
            <button class="but1">Voltar</button></a>

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