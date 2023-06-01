<h1>Cadastre-se</h1>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <!--nome-->
        <label for="">Nome</label>
        <input type="text" name="nome" class="from-control">
    </div>
    <div class="mb-3">
        <!--senha-->
        <label for="">Senha</label>
        <input type="password" name="senha" class="from-control" required>
    </div>
    <div class="mb-3">
        <!--email-->
        <label for="">Email</label>
        <input type="email" name="email" class="from-control">
    </div>
    <div class="mb-3">
        <!--data de nascimento-->
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="from-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn ">Apagar</button>
    </div>
</form>

