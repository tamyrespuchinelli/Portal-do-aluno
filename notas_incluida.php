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
	<section class="chamada">
    	<h2>Portal do Aluno</h2>
  		<h3>Seja bem- vindo ao seu novo Portal do Aluno</h3>
    </section><!-- fim .chamada -->
	
    <section class="container-menu">
    	
            

             
           
           <a class="but-menu2" href="acesso-alunos.php" >Acesso de alunos</a>
<a class="but-menu2" href="materiais-professor.php" >Materiais</a>
<a class="but-menu2" href="atualizar-cadastro-professor.php" >Cadastro</a>
<a class="but-menu2" href="notas-inclusao.php" >Lançar Notas</a>

            </div>
       </section><br><!-- fim .container -->

     


<section class="notas">
    <h4> Notas</h4>

    <table id="tbl1" border="3">
<thead>
<tr>


<td>Código</td>
<td>Período</td>
<td>Professor</td>
<td>Nome</td>
<td>AV1</td>
<td>AV2</td>
<td>AV3</td>
<td>Média</td>

</tr>
</thead>
<tr>

<?php require("conexao.php");
      
$matricula = isset($_POST['a_matricula'])?$_POST['a_matricula']:false;
$curso = isset($_POST['curso_id'])?$_POST['curso_id']:false;
$av1 = isset($_POST['av1'])?$_POST['av1']:-1;
$av2 = isset($_POST['av2'])?$_POST['av2']:-1;
$av3 = isset($_POST['av3'])?$_POST['av3']:-1;
      


$query = "SELECT COUNT(*) from nota WHERE a_matricula=$matricula and curso_id=$curso order by nota_id";
$inserir = mysqli_query($conexao, $query);
$qtd=mysqli_fetch_row($inserir);

$query="";
if ($qtd<1)
	$query = "INSERT INTO nota (a_matricula, curso_id, av1, av2, av3)  VALUES ('$matricula','$curso','$av1','$av2','$av3')";
elseif ($qtd>0)
	$query = "UPDATE nota SET nota.av1=$av1, nota.av2=$av2, nota.av3=$av3 WHERE nota.a_matricula=123456 and nota.curso_id=1 ";
if ($query!="")
	mysqli_query($conexao, $query);



?>

<?php 
echo '<tr>';
echo "'<td><input type='text' disabled='disabled' value='INF1020' name='codisc' size='5'></td>'";
echo "'<td><input type='text' disabled='disabled' value='2015.1' name='periodo' size='3'></td>'";
echo "'<td><input type='text' disabled='disabled' value='Joana Ferreira'  name='nome_professor' size='10'></td>'";
echo "'<td><input type='text' disabled='disabled' value='Ana Ferreira'  name='nome' size='10'></td>'";
echo "'<td><input type='text' name='av1' size='3' value=".($av1 = isset($_POST['av1'])?$_POST['av1']:-1)."> <br/> </td>'";
echo "'<td><input type='text' name='av2' size='3' value=".($av2 = isset($_POST['av2'])?$_POST['av2']:-1)."><br/> </td>'";
echo "'<td><input type='text' name='av3' size='3' value=".($av3 = isset($_POST['av3'])?$_POST['av3']:-1)."><br/> </td>'";
//echo "'<td>".round((($av1 = isset($_POST['av1'])?$_POST['av1']:-1))+(($av2 = isset($_POST['av2'])?$_POST['av2']:-1))+(($av3 = isset($_POST['av3'])?$_POST['av3']:-1))/(($av1 = isset($_POST['av1'])?$_POST['av1']:-1)+($av2 = isset($_POST['av2'])?$_POST['av2']:-1)+($av3 = isset($_POST['av3'])?$_POST['av3']:-1)),1).'</td><br>';
echo '<td>'.round((($_POST['av1']>-1?$_POST['av1']:0)+($_POST['av2']>-1?$_POST['av2']:0)+($_POST['av3']>-1?$_POST['av3']:0))/(($_POST['av1']>-1)+($_POST['av2']>-1)+($_POST['av3']>-1)),1).'</td><br>';


echo '</tr>';

?>


</tbody>
</table>


<a class="but1" href="notas-inclusao.php">
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