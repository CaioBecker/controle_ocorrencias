<?php
include 'cabecalho.php';
include 'conexao.php';
?>
<div class="titulo">
Consulta de Regimento
<a href="index.php">voltar</a>
</div>
</br>
    <div class="row">
    <form method="post" action="sql_regimento.php">
        <div class="col-md-3">
            Artigo:
            <input class="form-control" type="number" name="n_artigo" required>
            <input class="btn_azul btn" type="submit" name="btn_busca" value="buscar">  
        </div>
    </form>    
        </br>
        <div class="col-md-4">
            Paragrafo:
            <input class="form-control" type="text" name="paragrafo" required>  
        </div>
        </br>
    </div>
    <div class="row">
        <div class="col-md-12">
            Descrição:
            <input class="form-control" type="text" name="descricao" required>  
        </div>
    </div>
    



<?php 
include 'rodape.php';
include 'sql_regimento.php';
?>