<?php include __DIR__.'/../start-html.php'; ?>

<form action="/realiza-login" method="post">
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control">

        <button class="btn btb-primary">Entrar</button>
    </div>

</form>

<?php include __DIR__.'/../end-html.php'; ?>