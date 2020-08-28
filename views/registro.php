<?php
    require_once "cabec.php";
?>

<h1>Informações do registro</h1>
<form action="#" method="POST">
    <p>
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php if($id!=0) echo $ret[0]->nome ?>" required>
    </P>

    <p>
        <label>Telefone:</label>
        <input type="text" name="telefone" value="<?php if($id!=0) echo $ret[0]->telefone ?>" required>
    </P>

    <p>
        <label>Rua:</label>
        <input type="text" name="rua" value="<?php if($id!=0) echo $ret[0]->rua ?>" required>
    </P>

    <p>
        <label>Número:</label>
        <input type="text" name="numero" value="<?php if($id!=0) echo $ret[0]->numero ?>" required>
    </P>

    <p>
        <label>Bairro:</label>
        <input type="text" name="bairro" value="<?php if($id!=0) echo $ret[0]->bairro ?>" required>
    </P>

    <p>
        <label>Cidade:</label>
        <input type="text" name="cidade" value="<?php if($id!=0) echo $ret[0]->cidade ?>" required>
    </P>

    <p>
        <label>Estado:</label>
        <select name="estado" required>
            <option selected><?php if($id!=0){echo $ret[0]->estado;}else{echo "Escolha um estado";} ?></option>
            <option>AC</option>
            <option>AL</option>
            <option>AP</option>
            <option>AM</option>
            <option>BA</option>
            <option>CE</option>
            <option>ES</option>
            <option>GO</option>
            <option>MA</option>
            <option>MT</option>
            <option>MS</option>
            <option>MG</option>
            <option>PA</option>
            <option>PB</option>
            <option>PR</option>
            <option>PE</option>
            <option>PI</option>
            <option>RJ</option>
            <option>RN</option>
            <option>RS</option>
            <option>RO</option>
            <option>RR</option>
            <option>SC</option>
            <option>SP</option>
            <option>SE</option>
            <option>TO</option>
            <option>DF</option>
        </select>
    </P>
    
    <input type="submit" value="ENVIAR">
</form>

<?php
    require_once "rodape.php";
?>