<?php
    class Imagem{

        // ATRIBUTOS //
        private $id;
        private $local;
        private $id_cliente;
        private $id_dono;

        // MÉTODOS ESPECIAIS // 
        function getId(){
            return $this->id;
        }

        function setId($id){
            $this->id = $id;
        }

        function getLocal(){
            return $this->local;
        }

        function setLocal($local){
            $this->local = $local;
        }

        function getIdcliente(){
            return $this->id_cliente;
        }

        function setIdcliente($cliente){
            $this->id_cliente = $cliente;
        }

        function getIddono(){
            return $this->id_dono;
        }

        function setIddono($dono){
            $this->id_dono = $dono;
        }

        // MÉTODO NORMAIS //
        function newImagem($pdo){
            $sql = 'INSERT INTO imagem (local, id_cliente, id_dono) values (:local, :id_cliente, :id_dono)';
            $new = $pdo->prepare($sql);
            $new->bindValue(':local', $this->getLocal());
            $new->bindValue(':id_cliente', $this->getIdcliente());
            $new->bindValue(':id_dono', $this->getIddono());
            $new->execute();
            //$this->readImagens();
        }

        function updateImagem(){

        }

        function deleteImagem(){

        }

        function readImagens(){

        }
    }
?>