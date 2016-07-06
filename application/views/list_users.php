<?php

    require_once LAYOUTS.'/header.php';
    
?>

        <section>
            <header>
                <h2>Users:</h2>
            </header>
            
            <article>
                <?php if (isset($users)): ?>
                <ul>
                <?php foreach ($users as $user): ?>
                <li><a href="<?= URL_APPLICATION . "/index.php?action=removeUser&id=" . $user->getId(); ?>"><img class="papelera" src="<?= URL_IMAGES ?>/delete.png" alt="Borrar" /></a><p><?= $user->getName() ?></p><p><?= $user->getRol(); ?></p></li>
                <?php endforeach; ?>
                </ul>
                <?php else: ?>
                <p id="mensaje">There are no users!</p>
                <?php endif; ?>
            </article>
        </section>

<?php

    require_once LAYOUTS.'/footer.php';
    
?>
