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
        <form method="post" action="sql_convencao.php">
            <div class="col-md-3">
                Artigo:
                <input class="form-control" type="number" name="n_artigo" value= "<?php echo $row_convencao['artigo'];?>" required>  
                <input class="btn_azul btn" type="submit" name="btn_busca" value="buscar">
            </div>
        </form>
        </br>
        <div class="col-md-4">
            Paragrafo:
            <input class="form-control" type="text" name="paragrafo" value= "<?php echo $row_convencao['paragrafo']; ?>" disabled>  
        </div>
        </br>
    </div>
    <div class="row">
        <div class="col-md-12">
            Descrição:
            <input class="form-control" type="text" name="descricao" value= "<?php echo $row_convencao['descricao'];?>" disabled>  
        </div>
    </div>
    
    
<?php 
include 'rodape.php';
include 'sql_convencao.php';
?>