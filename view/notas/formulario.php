<?php include __DIR__.'/../start-html.php'; ?>
<a href="/listaNotas" class="link">Voltar</a>
<form action="/salvar-nota" method="post">
        <div class="form-group">
        <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo" class="form-control">    
        
        <label for="nota">Descrição</label>
            <input type="text" id="nota" name="nota" class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>

<?php include __DIR__.'/../end-html.php'; ?>