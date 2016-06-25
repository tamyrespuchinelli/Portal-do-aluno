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
<td>Status</td>
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
    $status = isset($_POST['status'])?mysqli_real_escape_string($conexao,$_POST['status']):false;
	$status = $status==0?1:0;
	
	$query = "SELECT COUNT(*) from cursa WHERE a_matricula='".$matricula."' and cursa_id='".$cursa."'";
	$inserir = mysqli_query($conexao, $query);
	$qtd=mysqli_fetch_row($inserir);

	if ($qtd>0){
		mysqli_query($conexao, "UPDATE cursa SET status='".$status."' WHERE a_matricula='".$matricula."' and cursa_id='".$cursa."'");	
	}
	
	//echo "INSERT INTO nota ( av1, av2,av3, cursa_id)  VALUES ('-1','-1','-1','".$cursa."')";
	//exit;
	
	//if ($status==1){
		//mysqli_query($conexao, "INSERT INTO nota ( av1, av2,av3, cursa_id)  VALUES ('-1','-1','-1','".$cursa."')");
	//}else{
	//	mysqli_query($conexao, "DELETE nota WHERE cursa_id ='".$cursa."'");
	//}
	

	
	
}



$classe = $_GET["classe_id"];

$query = "SELECT periodo,aluno.a_matricula,a_nome,codisc,cursa.cursa_id,status from cursa inner join classe on classe.classe_id=cursa.classe_id  inner join aluno on cursa.a_matricula=aluno.a_matricula  WHERE classe.classe_id=".$classe;

$inserir = mysqli_query($conexao, $query);
while($rowData = mysqli_fetch_array($inserir))
{
echo '<tr>';

echo '<form action="selecao-alunos.php?classe_id='.$classe.'" method="POST">';
echo '<input type="hidden" name="a_matricula" value="'.$rowData['a_matricula'].'">';
echo '<input type="hidden" name="cursa_id" value="'.$rowData['cursa_id'].'">';
echo '<input type="hidden" name="status" value="'.$rowData['status'].'">';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['codisc'].'" size="5"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['periodo'].'" size="3"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['a_matricula'].'" size="10"></td>';
echo '<td><input type="text" disabled="disabled" value="'.$rowData['a_nome'].'" size="10"></td>';
echo '<td><input type="text" disabled="disabled" value="'.($rowData['status']==1?"Inscrito":"Pendente").'" size="10"></td>';
echo '<td><input type="submit" class="button button_telanota" value="Alterar"></input></td>';



echo '</form></tr>';

}
// $query = "INSERT INTO nota ( a_matricula, curso_id, nota_id, av)  VALUES ('$matricula_nota','$curso_nota','$nota_nota','$av_nota')";
  
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