<?php

include 'conexao.php';

$var_artigo = @$_POST['n_artigo'];

$consulta_convencao = "SELECT * FROM convencao_regimento
                        WHERE  artigo = $var_artigo
                        AND convencaoOUregimento = 'c'";

$resultado_convencao = mysqli_query($conn,$consulta_convencao);

$row_convencao = $resultado_convencao;

//echo $resultado_convencao;
header('location: convencao.php');
?>