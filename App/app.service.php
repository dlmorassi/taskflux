<?php 

    class LoginService {
        private $conexao;
        private $usu;

        public function __construct(Conexao $conexao, Usuario $usu){
            $this->conexao = $conexao->conectar();
            $this->usu = $usu;
        }

        public function logar(){
            $query = 'select u.id as id, u.nome as nome, u.cargo as cargo, u.idws as idws, n.nivel as nivel from usuarios as u left join niveis as n on(u.id_na = n.id_na) where email = :user and senha = :senha';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':user', $this->usu->__get('user'));
            $stmt->bindValue(':senha', $this->usu->__get('senha'));
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    }

    class EspService {
        private $conexao;
        private $esp;

        public function __construct(Conexao $conexao, Espaco $esp){
            $this->conexao = $conexao->conectar();
            $this->esp = $esp;
        }

        public function recTodos(){
            $query = 'select idec, nome from espacos where idws = :idws';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(":idws", $this->esp->__get("idws"));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }

    class TarefaService {
        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa){
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        public function recTasks(){
            $query = 'select t.idt, t.tarefa, t.descricao, s.statu from tarefas as t left join tb_status as s on (t.id_status = s.id_s) where idec = :idec';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(":idec", $this->tarefa->__get("idec"));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function insTar(){
            $query = 'insert into tarefas (tarefa, descricao, id_status, idec) values (:tarefa, :descricao, :id_status, :idec)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(":tarefa", $this->tarefa->__get("tarefa"));
            $stmt->bindValue(":descricao", $this->tarefa->__get("descricao"));
            $stmt->bindValue(":id_status", $this->tarefa->__get("id_status"));
            $stmt->bindValue(":idec", $this->tarefa->__get("idec"));
            $stmt->execute();
        }
    }
?>