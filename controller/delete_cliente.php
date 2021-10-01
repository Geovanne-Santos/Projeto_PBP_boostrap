<?php
include_once '../conn_bd/conexao.php';
include_once '../conn_bd/manager.php';

$manager = new Manager();

$id = $_POST['id'];

if(isset($id) && !empty($id)){
    $manager->deleteCostumer("clientes", $id);

    header("Location: ../index.php?costumer_deleted");
}