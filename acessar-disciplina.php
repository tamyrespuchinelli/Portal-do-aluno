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
    <h4>Inscreva-se!</h4>

    <table id="tbl1" border="3">
<thead>

<tr>


<td>Código</td>
<td>Disciplina</td>
<td>Periodo</td>
<td>Professor</td>
<td>Sala</td>
<td>Horário</td>
<td>Dia</td>
<td>Status</td>



</tr>
</thead>
   

<?php
require('conexao.php');

$matricula=$_SESSION['a_matricula'];


if (isset($_POST['a_matricula']) && isset($_POST['status']) && isset($_POST['classe_id']))
{
	$matricula = isset($_POST['a_matricula'])?mysqli_real_escape_string($conexao,$_POST['a_matricula']):false;
    $classe= isset($_POST['classe_id'])?mysqli_real_escape_string($conexao,$_POST['classe_id']):false;
    $status = isset($_POST['status'])?mysqli_real_escape_string($conexao,$_POST['status']):false;
	$status = 0;
    
	$query = "SELECT cursa_id from cursa WHERE a_matricula='".$matricula."' and classe_id='".$classe."'";
	
	$inserir = mysqli_query($conexao, $query);
	$qtd=mysqli_fetch_row($inserir);

	if ($qtd)
		mysqli_query($conexao, "UPDATE cursa SET status='".$status."' WHERE a_matricula='".$matricula."' and cursa_id='".$qtd[0]."' and classe_id='".$classe."'"); 
	else
		mysqli_query($conexao, "INSERT INTO cursa VALUES (".$matricula.",0,'',".$classe." );");


    
}

$query = "select disciplina.disc_nome,aluno.a_matricula, classe.classe_id, cursa.status, classe.codisc, classe.periodo, professor.p_nome, classe.sala, classe.horario, classe.dia from aluno inner join curso on aluno.curso_id = curso.curso_id inner join professor on professor.curso_id = curso.curso_id inner join classe on classe.matricula = professor.matricula left join cursa on cursa.a_matricula = aluno.a_matricula and cursa.classe_id = classe.classe_id and classe.matricula = professor.matricula inner join disciplina on disciplina.codisc=classe.codisc where aluno.a_matricula ='".$matricula."'" ;

$inserir = mysqli_query($conexao, $query);
while($rowData = mysqli_fetch_array($inserir))
    
    {


    echo '<tr>';

echo '<form action="acessar-disciplina.php" method="POST">';
echo '<input type="hidden" name="a_matricula" value="'.$rowData['a_matricula'].'">';
echo '<input type="hidden" name="classe_id" value="'.$rowData['classe_id'].'">';
echo '<input type="hidden" name="status" value="'.$rowData['status'].'" size="4">';

echo '<td><input type="text" disabled="disabled" value="'.$rowData['codisc'].'" size="4"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['disc_nome'].'" size="4"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['periodo'].'" size="4"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['p_nome'].'" size="5"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['sala'].'" size="2"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['horario'].'" size="3"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['dia'].'" size="5"></td>';

echo '<td><input type="text" disabled="disabled" value="';

if ($rowData['status']==null)
	echo 'Disponível" size="5"></td><td><input type="submit" class="button button_telanota" value="Inscreva-se"></input></td>';
elseif ($rowData['status']==0)
	echo 'Pendente" size="7"></td><td></td>';
else
	echo 'Inscrito" size="4"></td><td></td>';




echo '</form></tr>';

}



  
?>



</tbody>
</table>






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