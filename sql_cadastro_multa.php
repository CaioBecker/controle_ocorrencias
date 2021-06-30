<?php
include 'conexao.php';


$var_apartamento = $_POST['n_aptm'];
$var_dt_ocorrencia = $_POST['dt_ocorrencia'];
$var_obs_ocorrencia = $_POST['obs_ocorrencia'];
$var_advertencia_multa = $_POST['hidden_adv_multa'];
$var_vl_multa = $_POST['vl_multa'];
$var_convercao_regimento = $_POST['hidden_conv_regi'];
$var_artigo = $_POST['artigo'];

if ($var_box_convercao = ''){
    $var_convercao_regimento = 'r';
}else{
    $var_convercao_regimento = 'c';
}

if ($var_box_advertencia = ''){
    $var_advertencia_multa = 'm';
}else{
    $var_advertencia_multa = 'a';
}

$insert_advertencias_multas = "INSERT INTO advertencias_multas
                    SELECT 
                    '$var_dt_ocorrencia' as data_hora,
                    '$var_convercao_regimento' as convencaoouregimento,
                    '$var_artigo' as artigo,
                    '$var_apartamento' as numero,
                    '$var_obs_ocorrencia' as relatoOCORRIDO,
                    '$var_advertencia_multa' as TIPO_ADVERTENCIA_OU_MULTA,
                    '$var_vl_multa' as VALORMULTA
                    FROM dual";

echo '<br>'. $insert_advertencias_multas .'</br>';

mysqli_query($conn, $insert_advertencias_multas) or die('ERRO AO CADASTRAR IMOVEL');

//mysqli_close($insert_imoveis);
echo "IMOVEL CADASTRADO COM SUCESSO!";
if(!$insert_advertencias_multas){
    

}else{
    header('location: index.php');
}




?>