<?php

include 'conexao.php';

$var_artigo = $_POST['n_artigo'];

$consulta_regimento = "SELECT * FROM convencao_regimento
                        WHERE  artigo = $var_artigo
                        AND convencaoOUregimento = 'r'";

$resultado_regimento = mysqli_query($conn,$consulta_regimento);

$row_regimento = $resultado_regimento;

//echo $resultado_convencao;
header('location: regimento.php');
?>