    <?php
        include 'cabecalho.php';
        include 'conexao.php';
    ?>
        <div class="titulo">
        <h1>Menu</h1>

        </div>
        </br>
        <div class="row sub_titulo">
            <i class="fas fa-scroll"></i><h2>Ocorrencias</h2>
        </div>
        <div class="row-md">
            <div class="col-md">
                <a class="btn_azul btn" href="consulta_ocorrencias.php">Consultar Ocorrencias</a>     
            </div>
            </br>
            <div class="col-md">
                <a class="btn_azul btn" href="cadastro_ocorrencias.php">Cadastro de Ocorrencias</a>     
            </div>
            </br>
            <div class="col-md">
                <a class="btn_azul btn" href="editar_ocorrencias.php">Editar Ocorrencias</a>     
            </div>
        </div>

        <div class="row sub_titulo">        
            <h2>Apartamento</h2>
        </div>
        <div class="row-md">
            <div class="col-md">
                    <a class="btn_azul btn" href="editar_morador.php">Editar apartamento</a>
                </div>
                </br>
                <div class="col-md">
                    <a class="btn_azul btn" href="adicionar_morador.php">Adicionar apartamento</a>
            </div>
        </div>

        <div class="row sub_titulo">
            <h2>Convenção ou Regimento</h2>
        </div>
        <div class="row-md">
            <div clss="col-md">
                <a class="btn_azul btn" href="convencao.php">Consultar Convenção</a>
                <a class="btn_azul btn" href="regimento.php">Consultar Regimento</a>
            </div>
        </div>
    <?php
        include 'rodape.php';
    ?>