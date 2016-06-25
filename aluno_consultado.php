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
    	<h2>Consulta de Alunos </h2>
  		<h3></h3>



    </section><!-- fim .chamada -->
    
    <section class="container-menu1">
        
            

             
           
<nav> <ul class="menu"> <li><a href="">Gerenciar Curso</a> <ul> <li><a href="gerenciar-disciplina.php">Disciplinas</a></li><li><a href="gerenciar-professor.php">Professor</a></li></ul><li><a href="gerenciar-noticias.php">Noticias</a>
 <li><a href="#">Consultas</a><ul><li><a href="consultar-alunos.php">Alunos</a></li></ul> <li><a href="atualizar-cadastro-coordenador.php">Cadastro</a></li> </ul> </nav>


       </section><br><!-- fim .container -->
    </section><!-- fim .chamada -->
	<section class="container">
    	<div class="desktop">
            <div class="form">
        	
			<h3>Consulta de alunos</h3>

            <div class="form-noticias">
                
                          
  <table id="tbla" border="1">
<thead>
<tr>


<td>Curso</td>
<td>Período</td>
<td>Matricula</td>
<td>Nome</td>
<td>Email</td>



</tr>
</thead>

                            
            
        <?php require("conexao.php");
			

    
{
    $curso = $_SESSION['curso_id'];
$matricula=$_SESSION['a_matricula'];
$query = "SELECT periodo,a_matricula,a_nome,email from curso inner join aluno on curso.curso_id=aluno.curso_id  WHERE a_matricula LIKE '%".$matricula."%' AND curso_id LIKE '%".$curso."%'";



$inserir = mysqli_query($conexao, $query);
while($rowData = mysqli_fetch_array($inserir))
{
echo '<tr>';

echo '<form action="notas-inclusao.php?curso_id=1" method="POST">';
echo '<td><input type="text"  value="'.$rowData['periodo'].'" size="7"></td>';
echo '<td><input type="text" value="'.$rowData['a_matricula'].'" size="6"></td>';
echo '<td><input type="text" value="'.$rowData['a_nome'].'" size="15"></td>';
echo '<td><input type="text" value="'.$rowData['email'].'" size="10"></td>';
echo '</tr>';
}
}


            
            
            
            
            
            

   
        ?>
        

        </div><!-- fim #desktop -->
        
	</section><!-- fim .container -->
    <footer>
    	<small class="copyright">
        	<p>Copyright © 2016 - Todos os Direitos Reservados à <strong>Tamyres Puchinelli</strong></p>
        </small><!-- fim .copyright -->
        <small class="desenvolvedor">
            
        </small><!-- fim .desenvolvedor -->
    </footer><!-- fim footer -->


</script>
</body>
</html>