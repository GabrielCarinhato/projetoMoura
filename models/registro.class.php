<?php
    class registro
    {
        private $id_registro;
        private $nome;
        private $telefone;
        private $rua;
        private $numero;
        private $bairro;
        private $cidade;
        private $estado;

        function __construct($id="", $nome="", $telefone="", $rua="", $numero="", $bairro="", $cidade="", $estado="")
        {
            $this->id_registro=$id;
            $this->nome=$nome;
            $this->telefone=$telefone;
            $this->rua=$rua;
            $this->numero=$numero;
            $this->bairro=$bairro;
            $this->cidade=$cidade;
            $this->estado=$estado;
        }

        function getId()
        {
            return $this->id_registro;
        }
            
        function getNome()
        {
            return $this->nome;
        }

        function getTelefone()
        {
            return $this->telefone;
        }

        function getRua()
        {
            return $this->rua;
        }

        function getNumero()
        {
            return $this->numero;
        }

        function getBairro()
        {
            return $this->bairro;
        }

        function getCidade()
        {
            return $this->cidade;
        }

        function getEstado()
        {
            return $this->estado;
        }
    }
?>