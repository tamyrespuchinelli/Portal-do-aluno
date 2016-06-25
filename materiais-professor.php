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
    <h6> Materiais Didáticos</h6>





    
  
<?php
$codisc="";
if (isset($_GET['codisc']))
	$codisc = preg_replace("([^A-Za-z0-9]+)","",$_GET['codisc']);
if (isset($codisc) && !empty($codisc))
{
	
	if (isset($_FILES['userfile']['name']))
	{
		
	$uploaddir = 'C:/Users/tamyres.souza/Desktop/xampp/htdocs/tcc/materiail/'.$codisc;
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		echo "Arquivo válido e enviado com sucesso.";
	} else {
		echo "Não foi possível enviar o arquivo!";
	}

	}
	else
	{
		 echo '<div class="div-form"><form enctype="multipart/form-data" action="materiais-professor.php? method="POST"><fieldset><p><label for="Enviar arquivo"><strong>Enviar arquivo:</strong></label></p><input type="file" name="userfile" class="width233"/><input type="hidden" name="MAX_FILE_SIZE" value="30000000000000000" /><input type="submit" name="enviar" value="Enviar" /> </fieldset></form></div>';

		
		
	}
}
else
{
	echo "Disc inválida!!!!";
}
?>
    

<a class="but1" href="menu-professor.php">
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