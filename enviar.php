<?php
if (isset($_FILES['userfile']['name']))
{
	
$uploaddir = 'C:/Users/tamyres.souza/Desktop/xampp/htdocs/tcc/arquivo/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Arquivo v�lido e enviado com sucesso.\n";
} else {
    echo "Poss�vel ataque de upload de arquivo!\n";
}

echo 'Aqui est� mais informa��es de debug:';
print_r($_FILES);

print "</pre>";
}
else
{
echo '<html><body><!-- O tipo de encoding de dados, enctype, DEVE ser especificado abaixo --><form enctype="multipart/form-data" action="enviar.php" method="POST">    <!-- MAX_FILE_SIZE deve preceder o campo input -->    <input type="hidden" name="MAX_FILE_SIZE" value="30000000000000000" />    <!-- O Nome do elemento input determina o nome da array $_FILES -->    Enviar esse arquivo: <input name="userfile" type="file" />    <input type="submit" value="Enviar arquivo" /></form></body></html>';
}
?>