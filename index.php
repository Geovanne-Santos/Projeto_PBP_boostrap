<?php 
include_once 'conn_bd/conexao.php';
include_once 'conn_bd/manager.php';
include_once 'helper.php';

$manager = new Manager();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PBP</title>

    <?php include_once 'dependencias.php'?>

</head>
<body>

<section>
    <h2>
        <span>Listar Clientes</span>
    </h2>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border ">
            <div class="row margin-botton-20">
                <div class="col-md-12 text-right">
                    <a href="view/clientes/registrar_cliente.php" title="Novo cadastro" class="btn btn-success"><i class="fa fa-plus-circle"></i> Novo</a>
                </div>
        </div>
    </div>

    <table class="table table-striped table-bordered table-hover dark ">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">Nome</th>
                <th class="text-center">R.G</th>
                <th class="text-center">CPF</th>
                <th class="text-center">Telefone</th>
                <th class="text-right">Opções</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($manager->listCostumer('clientes') as $c):?>
                <td class="text-center"><?= $c['nome']; ?></td>
                <td class="text-center"><?= $c['rg']; ?></td>
                <td class="text-center"><?= $c['cpf']; ?></td>
                <td class="text-center"><?= $c['telefone']; ?></td>
                <td>
                    <form method="POST" action="view/clientes/pagina_update.php">
                        <input type="hidden" name="id" value="<?= $c['id']?>">
                        <button class="btn btn-warning btn-xs">
                            <i class="fa fa-user-edit"></i>
                        </button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="controller/delete_cliente.php" onclick="return confirm('Você deseja excluir esta informação?')">
                        <input type="hidden" name="id" value="<?= $c['id']?>">
                        <button class="btn btn-danger btn-xs">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>

</body>
</html