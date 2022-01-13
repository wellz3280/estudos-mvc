<?php include __DIR__.'/../start-html.php'; ?>

<form action="/salvar-usuario-login" method="post">
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" required>

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" required>

        <button class="btn btn-success">Salvar</button>
    </div>

</form>

<?php include __DIR__.'/../end-html.php'; ?>