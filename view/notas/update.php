<?php include __DIR__.'/../start-html.php'; ?>

<a href="/listaNotas" class="btn btn-primary mb-2">
    voltar
</a>

<form action="/salvar-nota" method="post">
        <div class="form-group">
        <label for="titulo">Titulo</label>
       
            
            <input type="text" id="titulo" name="titulo" value="<?php echo $notas['titulo'];?>" class="form-control">    
        
        
          <textarea name="nota" id="nota" cols="80" rows="10">
            <?php echo $notas['nota'];?>
          </textarea>
     
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>

<?php include __DIR__.'/../end-html.php'; ?>