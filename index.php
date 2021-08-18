    <?php
        include 'cabecalho.php';
        include 'conexao.php';
    ?>
        <div class="titulo">
        <h1>Menu</h1>

        </div>
        </br>
            <i class="fas fa-scroll"></i><h2>Ocorrencias</h2>
        <div class="div-br">
                <a class="btn_azul btn" href="consulta_ocorrencias.php">Consultar Ocorrencias</a>     
        </div>
        <div class="div-br">
                <a class="btn_azul btn" href="cadastro_ocorrencias.php">Cadastro de Ocorrencias</a>     
        </div>
        <div class="div-br">
                <a class="btn_azul btn" href="editar_ocorrencias.php">Editar Ocorrencias</a>     
        </div>

        <div class="div-br">        
            <h2>Apartamento</h2>
        </div>
        <div class="div-br">
                    <a class="btn_azul btn" href="editar_morador.php">Editar apartamento</a>
        </div>
        <div class="div-br">
                    <a class="btn_azul btn" href="adicionar_morador.php">Adicionar apartamento</a>
        </div>

        <div class="div-br">
            <h2>Convenção ou Regimento</h2>
        </div>
        <div class="div-br">
                <a class="btn_azul btn" href="convencao.php">Consultar Convenção</a>
                <a class="btn_azul btn" href="regimento.php">Consultar Regimento</a>
        </div>
    <?php
        include 'rodape.php';
    ?>