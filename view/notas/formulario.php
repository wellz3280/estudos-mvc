<?php include __DIR__.'/../start-html.php'; ?>

<a href="/listaNotas" class="btn btn-primary mb-2">
    voltar
</a>

<form action="/salvar-nota<?= isset($data)? '?id='. $data->getId():''; ?>" method="post">
        <div class="form-group">
        <label for="titulo">Titulo</label>
       
            
            <input type="text" id="titulo" name="titulo"
             value="<?= isset($data)? $data->getTitulo():'';?>" class="form-control">    
        
        
          <textarea name="nota" id="nota" cols="80" rows="10">
            <?= isset($data)? $data->getNota():'';?>
          </textarea>
     
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>

<?php include __DIR__.'/../end-html.php'; ?>