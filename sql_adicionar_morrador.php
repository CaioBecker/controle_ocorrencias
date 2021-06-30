<?php

include 'conexao.php';

$var_apartamento = $_POST['n_apartamento'];
$var_proprietario1 = $_POST['nm_proprietario_01'];
$var_proprietario2 = $_POST['nm_proprietario_02'];
$var_endereco_proprietario = $_POST['end_proprietario'];
$var_cidadeproprietario = $_POST['cidade_proprietario'];
$var_cep_proprietario = $_POST['cep_proprietario'];
$var_telefone1 = $_POST['tel_proprietario1'];
$var_telefone2 = $_POST['tel_proprietario2'];
$var_telefone3 = $_POST['tel_proprietario3'];
$var_telefone4 = $_POST['tel_proprietario4'];
$var_email1 = $_POST['email_proprietario1'];
$var_email2 = $_POST['email_proprietario2'];
$var_residente = $_POST['proprietario_residente'];

$insert_imoveis = "INSERT INTO imoveis_condominio
                    SELECT
                    '$var_apartamento' as numero,
                    '$var_proprietario1' as proprietario1,
                    '$var_proprietario2' as proprietario2,
                    '$var_endereco_proprietario' as enderecoproprietario,
                    '$var_cidadeproprietario' as cidadeproprietario,
                    '$var_cep_proprietario' as cepproprietario,
                    '$var_telefone1' as tel1_proprietario,
                    '$var_telefone2' as tel2_proprietario,
                    '$var_telefone3' as tel3_proprietario,
                    '$var_telefone4' as tel4_proprietario,
                    '$var_email1' as email1_proprietario,
                    '$var_email2' as email2_proprietario,
                    '$var_residente' as proprietario_residente
                    FROM dual";

echo '<br>'. $insert_imoveis .'</br>';

mysqli_query($conn, $insert_imoveis) or die('ERRO AO CADASTRAR IMOVEL');

//mysqli_close($insert_imoveis);
echo "IMOVEL CADASTRADO COM SUCESSO!";
if(!$insert_imoveis){
    

}else{
    header('location: index.php');
}

?>

