<?php
    require_once "cabec.php";
?>

<h1>Registros</h1>

<a href="index.php?controle=inicioControl&metodo=index">Voltar</a>

<table border="2">
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th colspan="5">Endereço</th>
        <th colspan="2">Ações</th>
    </tr>

    <?php
        if(count($ret)>0)
        {
            foreach($ret as $dado)
            {
                echo "<tr>";
                echo "<td>{$dado->id_registro}</td>";
                echo "<td>{$dado->nome}</td>";
                echo "<td>{$dado->telefone}</td>";
                echo "<td>{$dado->rua}</td>";
                echo "<td>{$dado->numero}</td>";
                echo "<td>{$dado->bairro}</td>";
                echo "<td>{$dado->cidade}</td>";
                echo "<td>{$dado->estado}</td>";
                echo "<td><a href='index.php?controle=registroControl&metodo=alterar&id={$dado->id_registro}'>Alterar</a></td>";
                echo "<td><a href='index.php?controle=registroControl&metodo=excluir&id={$dado->id_registro}'>Excluir</a></td>";
                echo "</tr>";
            }
        }
        else
        {
            echo "<h2>Não há registros cadastrados!</h2>";
        }
    ?>
</table><br>

<a href="index.php?controle=registroControl&metodo=inserir">Inserir Registro</a>

<?php
    require_once "rodape.php";
?>