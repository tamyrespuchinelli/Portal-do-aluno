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

     


<section class="disciplinas">
    <h4> Disciplinas</h4>





<h3><?php
require('conexao.php');
//$curso = $_GET["curso_id"];
$matricula=$_SESSION['a_matricula'];



$query = "SELECT disc_nome,periodo,p_nome,classe.codisc,sala,horario,dia from classe inner join professor on professor.matricula=classe.matricula inner join cursa on classe.classe_id=cursa.classe_id inner join disciplina on disciplina.codisc=classe.codisc WHERE cursa.a_matricula='".$matricula."'";



$inserir = mysqli_query($conexao, $query);

if (mysqli_num_rows($inserir) > 0)
{
	echo '<table id="tbl1" border="3"><thead><tr><td>Código</td><td>Disciplina</td><td>Periodo</td><td>Professor</td><td>Sala</td><td>Horário</td><td>Dia</td></tr></thead>';
	while($rowData = mysqli_fetch_array($inserir))
	{
			
		echo '<tr>';

		echo '<form action="notas.php" method="POST">';
		echo '<td><input type="text" value="'.$rowData['codisc'].'" size="3"></td>';
		echo '<td><input type="text" value="'.$rowData['disc_nome'].'" size="3"></td>';
		echo '<td><input type="text" value="'.$rowData['periodo'].'" size="3"></td>';
		echo '<td><input type="text"  value="'.$rowData['p_nome'].'" size="5"></td>';
		echo '<td><input type="text" value="'.$rowData['sala'].'" size="3"></td>';
		echo '<td><input type="text"  value="'.$rowData['horario'].'" size="5"></td>';
		echo '<td><input type="text"  value="'.$rowData['dia'].'" size="5"></td>';



		echo '</tr>';
	}
}
	else
		echo "Você ainda não possui disciplinas!";

?></h3>
<br>
<br>


</tbody>
</table>


<a class="but1" href="notas.php">
            <button class="but1">Visualizar Notas</button></a> <br><br>



            <a class="but4" href="menu.php">
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