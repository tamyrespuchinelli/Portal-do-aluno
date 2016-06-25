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
    	<h2>Gerenciador de Noticias </h2>
  		<h3></h3>



    </section><!-- fim .chamada -->
    
    <section class="container-menu1">
        
            

             
           
<nav> <ul class="menu"> <li><a href="">Gerenciar Curso</a> <ul> <li><a href="gerenciar-disciplina.php">Disciplinas</a></li><li><a href="gerenciar-professor.php">Professor</a></li><li><a href="gerenciar-classe.php">Classe</a></li></ul><li><a href="gerenciar-noticias.php">Noticias</a>
 <li><a href="#">Consultas</a><ul><li><a href="consultar-alunos.php">Alunos</a></li></ul> <li><a href="atualizar-cadastro-coordenador.php">Cadastro</a></li> </ul> </nav>


       </section><br><!-- fim .container -->
    </section><!-- fim .chamada -->
	<section class="container">
    	<div class="desktop">
            <div class="form">
        	
			<?php require("conexao.php");
			

$codigo_noticia = $_POST['codigonoticia'];
$nome_noticia = $_POST['nome'];
$descricao_noticia = $_POST['descricao'];
 
   
   
   
    $query = "INSERT INTO noticia (
  codigonoticia , nome, descricao) 
  VALUES ('$codigo_noticia','$nome_noticia','$descricao_noticia')";
  

$inserir = mysqli_query($conexao, $query);

if ($inserir) {
echo "<center><h1><font>Noticia cadastrada com sucesso!</font></h1></center> <meta http-equiv='refresh' content='5; url=gerenciar-disciplina.php'>";
} else {
echo "Não foi possível realizar um novo cadastro, tente novamente!";
// Exibe dados sobre o erro: 
echo "Dados sobre o erro:" . mysqli_error();
}
  
  ?>
            
        </div>

        </div><!-- fim #desktop -->
        
	</section><!-- fim .container -->
    <footer>
    	<small class="copyright">
        	<p>Copyright © 2016
        </small><!-- fim .desenvolvedor -->
    </footer><!-- fim footer -->


</script>
</body>
</html>