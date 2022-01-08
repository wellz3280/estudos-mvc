<?php include __DIR__.'/../start-html.php'; ?>
<a href="/listaNotas" class="link">Voltar</a>
<form action="/salvar-nota" method="post">
        <div class="form-group">
        <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo" class="form-control">    
        
        <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>

<?php include __DIR__.'/../end-html.php'; ?>