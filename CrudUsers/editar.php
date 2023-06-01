<h1>Editar usuário</h1>

<?php

$sql = "SELECT * FROM usuarios WHERE ID=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->ID?>">
        <div class="mb-3">
        <!--nome-->
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php echo $row->NOME; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <!--senha-->
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <!--email-->
        <label for="">Email</label>
        <input type="email" name="email" value="<?php echo $row->EMAIL;?>" class="form-control">
    </div>
    <div class="mb-3">
        <!--data de nascimento-->
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php echo $row->DATA_NASC; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Atualizar</button>

    </div>
</form>

