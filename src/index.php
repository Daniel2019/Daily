<?php
    require("connection.php");
    require_once("model/cliente.php");

    $conexao = new ConexaoBanco();
    $pdo = $conexao->Conectar();
    $cliente = new Cliente();
    //$cliente->setNome("nome Daniel");
    //$cliente->newCliente($pdo);
    //$cliente->setId(3);
    //$cliente->setNome("maria");
    //$cliente->updateCliente($pdo);
    $cliente->readClientes($pdo);
?>