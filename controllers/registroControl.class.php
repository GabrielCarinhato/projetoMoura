<?php
    require_once "models/conexao.class.php";
    require_once "models/registro.class.php";
    require_once "models/registroDAO.class.php";

    class registroControl
    {
        function listar()
        {
            $registroDAO = new registroDAO();
            $ret = $registroDAO->buscarTodosRegistros();
            require_once "views/listarRegistros.php";
        }

        function alterar()
        {
            if($_GET)
            {
                $id = $_GET["id"];
                $registro = new registro($id);
                $registroDAO = new registroDAO();
                $ret = $registroDAO->buscarUmRegistro($registro);
                require_once "views/registro.php";
            }

            if($_POST)
            {
                $id = $_GET["id"];
                $registro = new registro($id, $_POST["nome"], $_POST["telefone"], $_POST["rua"], $_POST["numero"], $_POST["bairro"], $_POST["cidade"], $_POST["estado"]);
                $registroDAO = new registroDAO();
                $registroDAO->alterar($registro);
                header("Location: index.php?controle=registroControl&metodo=listar");
            }
        }

        function inserir()
        {
            $id = 0;
            require_once "views/registro.php";

            if($_POST)
            {
                $registro = new registro(null, $_POST["nome"], $_POST["telefone"], $_POST["rua"], $_POST["numero"], $_POST["bairro"], $_POST["cidade"], $_POST["estado"]);
                $registroDAO = new registroDAO();
                $registroDAO->inserir($registro);
                header("Location: index.php?controle=registroControl&metodo=listar");
            }
        }

        function excluir()
        {
            if($_GET)
            {
                $id = $_GET["id"];
                $registro = new registro($id);
                $registroDAO = new registroDAO();
                $registroDAO->excluir($registro);
                header("Location: index.php?controle=registroControl&metodo=listar");
            }
        }
    }
?>