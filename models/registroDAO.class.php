<?php
    class registroDAO extends conexao
    {
        function __construct()
        {
            parent :: __construct();
        }

        function buscarTodosRegistros()
        {
            $sql = "SELECT * FROM registros ORDER BY nome";
            try
            {
                $stm = $this -> db -> prepare($sql);
                $stm -> execute();
                $this -> db = null;
                $ret = $stm -> fetchAll(PDO :: FETCH_OBJ);
                return $ret;
            }
            catch(Exception $e)
            {
                die("Erro ao buscar os registros");
            }
        }

        function buscarUmRegistro($registro)
        {
            $sql = "SELECT * FROM registros WHERE id_registro=?";
            try
            {
                $stm = $this -> db -> prepare($sql);
                $stm->bindValue(1, $registro->getId());
                $stm -> execute();
                $this -> db = null;
                $ret = $stm -> fetchAll(PDO :: FETCH_OBJ);
                return $ret;
            }
            catch(Exception $e)
            {
                die("Erro ao buscar os registros");
            }
        }

        function alterar($registro)
        {
            $sql = "UPDATE registros SET nome=?, telefone=?, rua=?, numero=?, bairro=?, cidade=?, estado=?  WHERE id_registro=?";

            try
            {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $registro->getNome());
                $stm->bindValue(2, $registro->getTelefone());
                $stm->bindValue(3, $registro->getRua());
                $stm->bindValue(4, $registro->getNumero());
                $stm->bindValue(5, $registro->getBairro());
                $stm->bindValue(6, $registro->getCidade());
                $stm->bindValue(7, $registro->getEstado());
                $stm->bindValue(8, $registro->getId());
                $stm->execute();
                $this->db=null;
            }
            catch(Exception $e)
            {
                die("Erro ao alterar um registro");
            }
        }

        function inserir($registro)
        {
            $sql = "INSERT INTO registros (nome, telefone, rua, numero, bairro, cidade, estado) VALUES (?, ?, ?, ?, ?, ?, ?)";
            
            try
            {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $registro->getNome());
                $stm->bindValue(2, $registro->getTelefone());
                $stm->bindValue(3, $registro->getRua());
                $stm->bindValue(4, $registro->getNumero());
                $stm->bindValue(5, $registro->getBairro());
                $stm->bindValue(6, $registro->getCidade());
                $stm->bindValue(7, $registro->getEstado());
                $stm->execute();
                $this->db=null;
            }
            catch(Exception $e)
            {
                die("Erro ao inserir um registro");
            }
        }

        function excluir($registro)
        {
            $sql = "DELETE FROM registros WHERE id_registro=?";

            try
            {
                $stm = $this -> db -> prepare($sql);
                $stm->bindValue(1, $registro->getId());
                $stm -> execute();
                $this -> db = null;
            }
            catch(Exception $e)
            {
                die("Erro ao excluir um registro");
            }
        }
    }
?>