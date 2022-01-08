<?php include __DIR__.'/../start-html.php';?>
<?php foreach($nota as $notas):?>
    <h3 style="color:blue"> <?php echo $notas['titulo'] ?></h3>
    <p><?php echo $notas['nota'] ?></p>

<?php endforeach;?>

<a href="/listaNotas" class="btn btn-primary mb-2">
       voltar
</a>

<?php include __DIR__.'/../end-html.php'; ?>