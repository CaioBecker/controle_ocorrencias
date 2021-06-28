<?php

    include 'cabecalho.php';

?>

<div class="titulo">
Adicionar apartamento
<a href="index.php">voltar</a>
</div>
</br>
<form method="post" action="index.php">
<div class="row">
    <div class="col-md-2">
        apartamento:
        <input class="form-control" type="number" name="n_apartamento">
    </div>
    </br>
    <div class="col-md-2">
        proprietario 1
        <input class="form-control" type="text" name="nm_proprietario_01">
    </div>
    </br>
    <div class="col-md-2">
        proprietario 2
        <input class="form-control" type="text" name="nm_proprietario_02">
    </div>
    </br>
    <div class="col-md-2">
        endereço proprietario
        <input class="form-control" type="text" name="end_proprietario">
    </div>
    </br>
    <div class="col-md-2">
        cidade proprietario
        <input class="form-control" type="text" name="cidade_proprietario">
    </div>
    </br>
    <div class="col-md-2">
        cep proprietario
        <input class="form-control" type="text" name="cep_proprietario">
    </div>
    </br>
        <div class="col-md-3">
            Telefone 1
            <input class="form-control" type="text" name="tel_proprietario1">
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
    <div class="col-md-3">
            email 1
            <input class="form-control" type="text" name="email_proprietario1">
        </div>
    </br><div class="col-md-3">
            email 2
            <input class="form-control" type="text" name="email_proprietario2">
        </div>
    </br>
    <div class="col-md-3">
            residente
            <input class="form-control" type="text" name="proprietario_residente">
        </div>
    </br>
    <div class="col-md-2">
        <input class="btn btn_azul" type="submit" name="btn_salvar" value="salvar">
    </div>
</div>
</form>
<?php

    include 'rodape.php'

?>