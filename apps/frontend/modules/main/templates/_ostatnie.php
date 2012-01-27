<ul>
    <?php foreach ($main as $m): ?>
    <li>
        <a href="<?php echo url_for('main/index?id='.$m->getNazwa()); ?>">
            <?php echo $m; ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>