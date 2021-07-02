<?php
include 'cabecalho.php';
include 'conexao.php';
?>
<div class="titulo">
Consulta de Regimetno
<a href="index.php">voltar</a>
</div>
</br>
    <div class="row">
        <div class="col-md-3">
            Artigo:
            <input class="form-control" type="number" name="n_artigo" required>  
        </div>
        </br>
        <div class="col-md-4">
            Paragrafo:
            <input class="form-control" type="text" name="paragrafo" disabled>  
        </div>
        </br>
    </div>
    <div class="row">
        <div class="col-md-12">
            Descrição:
            <input class="form-control" type="text" name="descricao" disabled>  
        </div>
    </div>
    <
    
<?php 
include 'rodape.php';
?>