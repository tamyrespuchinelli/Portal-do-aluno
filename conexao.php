<?php
$conexao=mysqli_connect("localhost","root","") or die ("Falha na conexao");
$banco=mysqli_select_db ($conexao, "portaldoaluno" ) or die ("falha ao abrir o banco");
?>			  