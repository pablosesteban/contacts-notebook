<?php
    require_once LAYOUTS.'/cabeza.php';
?>

<section>
    <header>
        <h2>
            Usuarios:
        </h2>
    </header>

    <article>
        <?php if (isset($usuarios)): ?>
            <ul>
                <?php foreach ($usuarios as $usuario): ?>
                    <li><a href="<?= URLAPLICACION."/index.php?accion=borrarUsuario&id=".$usuario->getId(); ?>"><img class="papelera" src="<?= URLIMAGENES ?>/delete.png" alt="Borrar" /></a><p><?= $usuario->getNombre() ?></p><p><?= $usuario->getRol(); ?></p></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p id="mensaje">No existen usuarios</p>
        <?php endif; ?>
    </article>

</section>

<?php
    require_once LAYOUTS.'/pie.php';
?>
