<?php
include_once '../conn_bd/conexao.php';
include_once '../conn_bd/manager.php';

$manager = new Manager();

$update = $_POST;
$id = $_POST['id'];

if(isset($id) && !empty($id)){
    $manager->updateCostumer("clientes", $update, $id);

    header("Location: ../index.php?pagina_update");
}