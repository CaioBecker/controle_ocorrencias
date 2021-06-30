<?php

    include 'cabecalho.php';
    include 'conexao.php';
?>

<div class="titulo">
Adicionar apartamento
<a href="index.php">voltar</a>
</div>
</br>
<form method="post" action="sql_adicionar_morrador.php">
<div class="row">
    <div class="col-md-2">
        apartamento:
        <input class="form-control" type="number" name="n_apartamento" required>
    </div>
    </br>
    <div class="col-md-4">
        proprietario 1
        <input class="form-control" type="text" name="nm_proprietario_01" required>
    </div>
    </br>
    <div class="col-md-4">
        proprietario 2
        <input class="form-control" type="text" name="nm_proprietario_02">
    </div>
</div>
<div class="row">
    </br>
    <div class="col-md-3">
        endereço proprietario
        <input class="form-control" type="text" name="end_proprietario" required>
    </div>
    </br>
    <div class="col-md-3">
        cidade proprietario
        <input class="form-control" type="text" name="cidade_proprietario" required>
    </div>
    </br>
    <div class="col-md-3">
        cep proprietario
        <input class="form-control" type="text" name="cep_proprietario" required>
    </div>
    </br>
</div>
<div class="row">
        <div class="col-md-3">
            Telefone 1
            <input class="form-control" type="text" name="tel_proprietario1" required>
        </div>
    </br>
    <div class="col-md-3">
            Telefone 2
            <input class="form-control" type="text" name="tel_proprietario2">
        </div>
    </br>
    <div class="col-md-3">
            Telefone 3
            <input class="form-control" type="text" name="tel_proprietario3">
        </div>
    </br>
    <div class="col-md-3">
            Telefone 4
            <input class="form-control" type="text" name="tel_proprietario4">
        </div>
    </br>
</div>
<div class="row">
    <div class="col-md-3">
            email 1
            <input class="form-control" type="text" name="email_proprietario1" required>
        </div>
    </br><div class="col-md-3">
            email 2
            <input class="form-control" type="text" name="email_proprietario2">
        </div>
    </br>
    <div class="col-md-3">
            residente
            <input class="form-control" type="text" name="proprietario_residente" required>
        </div>
    </br>
</div>
    <div class="col-md-2">
        <input class="btn btn_azul" type="submit" name="btn_salvar" value="salvar">
    </div>
</div>
</form>
<?php

    include 'rodape.php'

?>