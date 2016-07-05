<?php
    
    require_once LAYOUTS . '/header.php';
    
?>

        <section>
            <header>
                <h2>Login:</h2>
            </header>
            
            <article>
                <form action="<?= URL_APPLICATION . '/index.php?action=login' ?>" method="post">
                    <fieldset>
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" value="" required/>
                        
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" value="" required/>
                        
                        <input class="boton" type="submit" name="enviar" id="enviar" value="Login" />
                    </fieldset>
                </form>
            </article>
        </section>

<?php
    
    require_once LAYOUTS . '/footer.php';
    
?>
