<?php 
include_once '../../conn_bd/conexao.php';
include_once '../../conn_bd/manager.php';
include_once '../../dependencias.php';
?>

<div class="box-title">
    <h2 class="text-center">
        Cadastrar clientes <i class="fa fa-users"></i>
    </h2>
</div><hr />

<form action="../../controller/inserir_cliente.php" method="POST">
    <section class="container">
        <div class="box">
            <div class="box-header">
            <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="nome">Nome: <i class="fa fa-user"></i></label>
                            <input type="text" class="form-control" id="nome" name="nome" require placeholder="Digite seu Nome Completo" autofocus>
                        </div>

                        <div class="col-md-12">
                            <label for="email">Endereço de email: <i class="fa fa-envelope"></i></label>
                            <input type="email" class="form-control" id="email" name="email" require placeholder="Digite seu endereço de email" autofocus>
                        </div>

                        <div class="col-md-3">
                            <label for="rg">R.G: <i class="fa fa-address-card"></i></label>
                            <input type="text" class="form-control" id="rg" name="rg" require placeholder="Digite seu RG" autofocus>
                        </div>

                        <div class="col-md-3">
                            <label for="cpf">C.P.F: <i class="fa fa-address-card"></i></label>
                            <input type="text" class="form-control" id="cpf" name="cpf" require placeholder="Digite seu CPF" autofocus>
                        </div>

                        <div class="col-md-3">
                            <label for="data">Data de nascimento: <i class="fa fa-calendar"></i></label>
                            <input type="date" class="form-control" id="data" name="data" require placeholder="Digite sua data de nascimento" autofocus>
                        </div>
                        
                        <div class="col-md-3">
                            <label for="telefone">Telefone: <i class="fab fa-whatsapp"></i></label>
                            <input type="text" class="form-control" id="telefone" name="telefone" require placeholder="Telefone com DDD" autofocus>
                        </div>
                        
                        <div class="col-md-4">
                            <label for="endereco">Endereço: <i class="fa fa-map"></i></label>
                            <input type="text" class="form-control" id="endereco" name="endereco" require placeholder="Digite aqui seu endereço" autofocus>
                        </div>
                        
                        <div class="col-md-4">
                            <label for="cep">C.E.P: <i class="fa fa-map"></i></label>
                            <input type="text" class="form-control" id="cep" name="cep" require placeholder="Digite aqui seu C.E.P" autofocus>
                        </div>

                        <div class="col-md-4">
                            <label for="numero">Numero: <i class="fa fa-map"></i></label>
                            <input type="text" class="form-control" id="numero" name="numero" require placeholder="Digite o número de sua casa" autofocus>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col text-left">
                                <a href="../../index.php" class="btn btn-danger">Cancelar <i class="fa fa-arrow-circle-left"></i></a>
                            </div>
                            <div class="col text-right">
                                <button type="submit" name="confirm" class="btn btn-success">Confirmar <i class="fa fa-user-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script type="text/javascript">
    $(document).ready(function (){
        $("#rg").mask("99.999.999-9");
        $("#cpf").mask("000.000.000-00");
        $("#telefone").mask("(00) 00000-0000");
        $("#numero").mask("000");
        $("#cep").mask("00000-000");
    });
</script>