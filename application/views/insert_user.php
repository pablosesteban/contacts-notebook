<?php

    require_once LAYOUTS . '/header.php';
    
?>

        <section>
            <header>
                <?php if(isset($_SESSION['user'])): ?>
                <h2>Insert User:</h2>
                <?php else: ?>
                <h2>Create User:</h2>
                <?php endif; ?>
            </header>
            
            <article>
                <form action="<?= URL_APPLICATION . '/index.php?action=insertUser' ?>" method="post">
                    <fieldset>
                        <label for="nombre">Name: </label>
                        <input type="text" name="name" id="nombre" value="" required/>
                        
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" value="" required/>
                        
                        <?php if(isset($_SESSION['user'])): ?>
                        <label for="rol">Rol:</label>
                        
                        <select id="rol" name="rol">
                            <option value="guest">guest</option>
                            <option value="admin">admin</option>
                        </select>
                        <?php else: ?>
                        <input type="hidden" name="rol" value="guest" />
                        <?php endif; ?>
                        
                        <input class="boton" type="submit" name="enviar" id="enviar" value="Send" />
                    </fieldset>
                </form>
            </article>
        </section>

<?php

    require_once LAYOUTS . '/footer.php';
    
?>
