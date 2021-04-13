<?php
    class Dono{

        // Atributos //
        private $id;
        private $nome;
        private $horarios;
        private $email;
        private $diasdisponiveis;
        private $rua;
        private $cidade;
        private $estado;
        private $bairro;
        private $numero;
        private $cep;

        //Métodos Especiais// 
        function setId($id){
            $this->id = $id;
        }

        function getId(){
            return $this->id;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function getNome(){
            return $this->nome;

        }
            
        function setHorarios($horarios){
           $this->horarios = $horarios;

        }

        function getHoraios(){
            return $this->Horaios; 
        }

        function getEmail(){
            return $this->email;
        }

        function setEmail($email){
            $this->email = $email;
        }

        function getDiasposniveis(){
            return $diasdisponiveis;
        }

        function setDiasdisposnivel($horarios){
            $this->horarios = $horaios;
        }

        function setRua($rua){
            $this->rua = $rua;
        }

        function getRua(){
            return $this->rua();
        }
        function setCidade($id){
            $this->id = $id;
        }

        function getCidade(){
            return $this->id;
        }   
        function setEstado($estado){
            $this->estado = $estado;
        }

        function getEstado(){
            return $this->estado;
        }
        function setBairro($bairro){
            $this->bairro = $bairro;
        }

        function getBairro(){
            return $this->bairro;
        }

        function getNumero(){
            return $this->numero;
        }

        function setNumero(){
            return $this->numero;
        }

        function getCep(){
            return $this->cep;
        }

        function setCep($cep){
            $this->$cep = $cep;
        }

        // Métodos Faciais//
        function newDono(){

        }
        function updateDono(){

        }

        function deleteDono($pdo){
            $sql = "DELETE FROM dono WHERE id = :id";
            $delete = $pdo->prepare($sql);
            $delete->bindValue(':id', $this->getId());
        }

        function readDonos(){

        }
    }
?>