<?php 

    class Usuario {
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $cargo;
        private $id_na;
        private $idws;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
            return $this;
        }
    }

    class Workspace {
        private $idws;
        private $nome;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
            return $this;
        }
    }

    class Espaco {
        private $idec;
        private $nome;
        private $idws;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
            return $this;
        }
    }

    class Tarefa {
        private $idt;
        private $tarefa;
        private $descricao;
        private $id_status;
        private $idec;
        private $data_cadastrada;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
            return $this;
        }
    }
?>