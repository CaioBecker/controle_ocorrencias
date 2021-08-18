<?php

include 'conexao.php';

$var_artigo = @$_POST['n_artigo'];

$consulta_regimento = "SELECT * FROM convencao_regimento
                        WHERE  artigo = $var_artigo
                        AND convencaoOUregimento = 'r'";

$resultado_regimento = mysqli_query($conn,$consulta_regimento);
//mysqli_execute($resultado_convencao);
$row_regimento = mysqli_fetch_array($resultado_regimento);

//echo $resultado_convencao;
header('location: regimento.php');
?>