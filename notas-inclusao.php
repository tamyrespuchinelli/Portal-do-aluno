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
    	
            

             
           
           <a class="but-menu2" href="acesso-turmas.php" >Acesso de Alunos</a>           
<a class="but-menu2" href="acesso-material-professor.php" >Materiais</a>
<a class="but-menu2" href="atualizar_cadastro_professor.php" >Cadastro</a>
<a class="but-menu2" href="turmas.php" >Lançar Notas</a>


            </div>
       </section><br><!-- fim .container -->

     


<section class="notas">
    <h4> Notas</h4>

    <table id="tbl1" border="3">
<thead>
<tr>


<td>Código</td>
<td>Período</td>
<td>Matricula</td>
<td>Nome</td>
<td>AV1</td>
<td>AV2</td>
<td>AV3</td>
<td>Média</td>
<td></td>
<td></td>


</tr>
</thead>
<?php
require('conexao.php');

if (isset($_POST['a_matricula']) && isset($_POST['cursa_id']))
{	
	$matricula = isset($_POST['a_matricula'])?mysqli_real_escape_string($conexao,$_POST['a_matricula']):false;
	$cursa = isset($_POST['cursa_id'])?mysqli_real_escape_string($conexao,$_POST['cursa_id']):false;
	$av1 = (isset($_POST['av1'])&&!empty($_POST['av1']))?mysqli_real_escape_string($conexao,$_POST['av1']):-1;
	$av2 = (isset($_POST['av2'])&&!empty($_POST['av2']))?mysqli_real_escape_string($conexao,$_POST['av2']):-1;
	$av3 = (isset($_POST['av3'])&&!empty($_POST['av3']))?mysqli_real_escape_string($conexao,$_POST['av3']):-1;
	
		  
	$query = "SELECT nota_id from nota inner join cursa on nota.cursa_id=cursa.cursa_id inner join aluno on cursa.a_matricula=aluno.a_matricula inner join classe on classe.classe_id=cursa.classe_id where aluno.a_matricula=".$matricula." and nota.cursa_id=".$cursa;
	$inserir = mysqli_query($conexao, $query);
	$rowData = mysqli_fetch_array($inserir);
	
		
	if ($rowData==0){
		//mysqli_query($conexao, "INSERT INTO nota ( nota_id, cursa_id,av1, av2, av3)  VALUES ('', '$cursa','$av1','$av2','$av3')");
		mysqli_query($conexao, "INSERT INTO nota ( cursa_id,av1, av2, av3)  VALUES ('$cursa','$av1','$av2','$av3')");		
	}
	else
	{		
		$qtd=$rowData[0];
		mysqli_query($conexao, "UPDATE nota SET nota.av1=$av1, nota.av2=$av2, nota.av3=$av3  WHERE nota.nota_id=".$qtd);
	}
}



$classe = $_GET["classe_id"];

$query = "SELECT cursa.cursa_id,aluno.a_matricula,a_nome,periodo,p_nome,codisc,av1,av2,av3 from classe inner join cursa on cursa.classe_id=classe.classe_id inner join aluno on aluno.a_matricula=cursa.a_matricula  left join nota on cursa.cursa_id=nota.cursa_id inner join professor on professor.matricula=classe.matricula  WHERE classe.classe_id=".$classe;

$inserir = mysqli_query($conexao, $query);
while($rowData = mysqli_fetch_array($inserir))
{
echo '<tr>';

echo '<form action="notas-inclusao.php?classe_id='.$classe.'" method="POST">';
echo '<input type="hidden" name="a_matricula" value="'.$rowData['a_matricula'].'">';
echo '<input type="hidden" name="cursa_id" value="'.$rowData['cursa_id'].'">';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['codisc'].'" size="5"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['periodo'].'" size="3"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['a_matricula'].'" size="8"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['a_nome'].'" size="10"></td>';
echo '<td><input type="text" name="av1" size="1" value="'.($rowData['av1']>-1?$rowData['av1']:"").'"> <br /></td>';
echo '<td><input type="text" name="av2" size="1" value="'.($rowData['av2']>-1?$rowData['av2']:"").'" <br /></td>';
echo '<td><input type="text" name="av3" size="1" value="'.($rowData['av3']>-1?$rowData['av3']:"").'"> <br /></td>';
if ($rowData['av1'])
	echo '<td>'.(($rowData['av1']+$rowData['av2']+$rowData['av3']>-3)?round((($rowData['av1']>-1?$rowData['av1']:0)+($rowData['av2']>-1?$rowData['av2']:0)+($rowData['av3']>-1?$rowData['av3']:0))/(($rowData['av1']>-1)+($rowData['av2']>-1)+($rowData['av3']>-1)),1):'').'</td><br>';
else
	echo '<td></td>';
echo '<td><input type="submit" class="button button_telanota" value="Inserir"></input></td>';



echo '</form></tr>';

}

  
?>


</tbody>
</table>


<a class="but1" href="turmas.php">
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