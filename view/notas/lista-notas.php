<?php include __DIR__.'/../start-html.php'; ?>

    <a href="/novaNota" class="btn btn-primary mb-2">
        Add +
    </a>

    <ul class="list-group">
       <?php foreach($nota as $notas):?>
            <li class="list-group-item">
              <a href="#" class="nav-link "><?php echo $notas; ?></a>
            </li>
       <?php endforeach; ?>
    </ul>

<?php include __DIR__.'/../end-html.php'; ?>