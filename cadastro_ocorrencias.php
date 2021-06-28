<?php
include 'cabecalho.php'
?>
<!--falta fazer a parte de sql e java-->
<div class="titulo">
Cadastro de Ocorrencias
<a href="index.php">voltar</a>
</div>
</br>
<form method="post" action="/index.php">
    <div class="row-md">
        <div class="col-md-3">
            apartamento:
            <input class="form-control" type="number" name="n_aptm" required>  
        </div>
        </br>
        <div class="col-md-4">
            data e hora:
            <input class="form-control" type="datetime-local" name="dt_ocorrencia" required>  
        </div>
        </br>
        <div class="col-md-12">
            observação:
            <input class="form-control" type="number" name="obs_ocorrencia" required>  
        </div>
        </br>
        <div class="col-md-3">
            Advertencia<input type="checkbox" name="ckbox_advertencia">  
            Multa<input type="checkbox" name="ckbox_multa">
        </div>
        </br>
        <div class="col-md-3">
            valor da multa:
            <input class="form-control" type="number" name="n_aptm" required>  
        </div>
        </br>
        <div class="col-md-3">
            converção<input type="checkbox" name="ckbox_convercao">
            regimento<input type="checkbox" name="ckbox_regimento">
        </div>
        </br>
        <div class="col-md-3">
            Artigo
            <input class="form-control" type="text" name="artigo">
        </div>
        </br>
        <div class="col-md-2">
            <input class="btn_azul btn" type="submit" name="btn_save" value="salvar">
        </div>
    </div>
</form>    
<?php
include 'rodape.php';
?>