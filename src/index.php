<?php
    require("connection.php");
    require_once("model/imagem.php");

    $conexao = new ConexaoBanco();
    $pdo = $conexao->Conectar();
    //$cliente = new Cliente();
    //$cliente->setNome("nome Daniel");
    //$cliente->newCliente($pdo);
    //$cliente->setId(3);
    //$cliente->setNome("maria");
    //$cliente->updateCliente($pdo);
    //$cliente->readClientes($pdo);

    $imagem = new Imagem();

    //$imagem->setlocal("img/src2");
    //$imagem->setIdcliente(1);
    //$imagem->setIddono(2);
    //$imagem->newImagem($pdo);
?>