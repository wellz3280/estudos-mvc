<?php include __DIR__.'/../start-html.php'; ?>

    <a href="/novaNota" class="btn btn-primary mb-2">
        Add +
    </a>

    <ul class="list-group">
       <?php foreach($nota as $notas):?>
            <li class="list-group-item d-flex justify-content-between">
              <a href="/vizualizar-nota?id=<?php echo $notas['idNote']; ?>" class="nav-link "> 
                 <?php echo $notas['titulo']; ?>
            </a>
            <span>

                <a href="/atualizar-nota?id=<?php echo $notas['idNote'];?>" class="btn btn-info btn-sm">atualizar</a>
                <a href="/excluir-nota?id=<?php echo $notas['idNote'];?>" class="btn btn-danger btn-sm">excluir</a>
            </span>
            
        </li>
       <?php endforeach; ?> 
    </ul>

<?php include __DIR__.'/../end-html.php'; ?>