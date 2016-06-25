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
      <h2><a href="index.php" title="Portal do Aluno"><span></span></a></h2>
        
    </header><!-- fim header -->
	<section class="chamada">
    	<h2>Portal do Aluno - Cadastro</h2>
  		<h3>Conheça o Portal do Aluno!</h3>
    </section><!-- fim .chamada -->
	<section class="container">
    	<div class="desktop">
            <div class="form">
        	
			<h3>Cadastre-se</h3>

            <form action="aluno_cadastrado.php" method="POST">
        <fieldset>
            
            
            

            </select><br>
            
            Curso:<select name='curso_id' title="Curso"> 
            <option value=1>TADS</option>
            <option value=2>CC</option>
            
</select><br>
            <label for="nome">Nome:</label>
            <input id="nome" name="a_nome" placeholder="Seu nome"></input> <br>

             <label for="email">Email:</label>
            <input id="email" name="email" placeholder="@mail.com"></input> <br>

           <label for="matricula">Matricula:</label>
            <input id="matricula" name="a_matricula" placeholder="****"></input> <br>

            <label for="senha">Senha:</label>
            <input  type="password" id="senha"  name="senha" ></input> <br>



             
           
            <input type="submit" class="button" value="Cadastrar"></input>

            
           
        </fieldset>
    </form>
            </div>
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