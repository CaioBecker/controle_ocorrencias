<?php
include 'cabecalho.php'
?>
<!--falta fazer a parte de sql e java-->
<div class="titulo">
Cadastro de Ocorrencias
<a href="index.php">voltar</a>
</div>
</br>
<form method="post" action="sql_cadastro_multa.php">
    <div class="row">
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
    </div>
    <div class="row">
        <div class="col-md-12">
            observação:
            <input class="form-control" type="text" name="obs_ocorrencia" required>  
        </div>
    </div>
    <div class="row">
        </br>
        <div class="col-md-3">
            Advertencia<input type="checkbox" name="ckbox_advertencia" id="id_advertencia" onblur="hidden_adv()">  
            Multa<input type="checkbox" name="ckbox_multa" id="id_multa" onblur="hidden_multa()">
            <input type="hidden" name="hidden_adv_multa" id="id_hidden1">
        </div>
        </br>
        <div class="col-md-3">
            valor da multa:
            <input class="form-control" type="number" name="vl_multa" required>  
        </div>
        </br>
        <div class="col-md-3">
            convenção<input type="checkbox" name="ckbox_convercao" id="id_conv"onblur="hidden_conv()">
            regimento<input type="checkbox" name="ckbox_regimento" id="id_regi" onblur="hidden_regi()">
            <input type="hidden" name="hidden_conv_regi" id="id_hidden2">
        </div>
        </br>
        <div class="col-md-3">
            Artigo
            <input class="form-control" type="text" name="artigo">
        </div>
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
<script>

    function hidden_multa(){
        var advertencia = getElementById(id_advertencia);
        var multa = getElementById(id_multa);
        var hidden = getElementById(id_hidden1).value;
        
        if(isset (advertencia)){
            getElementById(id_hidden1).value = 'multa';
            (getElementById(id_multa)).checked = false;

        }
    }
    function hidden_adv(){
        var advertencia = getElementById(id_advertencia);
        var multa = getElementById(id_multa);
        var hidden = getElementById(id_hidden1).value;
        
        if(isset (multa)){
            getElementById(id_hidden1).value = 'adv';
            (getElementById(id_advertencia)).checked = false;

        }

    }
    function hidden_conv(){
        var conv = getElementById(id_conv);
        var regi = getElementById(id_regi);
        var hidden = getElementById(id_hidden2).value;
        
        if(isset (conv)){
            getElementById(id_hidden2).value = 'c';
            (getElementById(id_regi)).checked = false;

        }

    }
    function hidden_regi(){
        var conv = getElementById(id_conv);
        var regi = getElementById(id_regi);
        var hidden = getElementById(id_hidden2).value;
        
        if(isset (regi)){
            getElementById(id_hidden2).value = 'r';
            (getElementById(id_conv)).checked = false;

        }

    }

</script>