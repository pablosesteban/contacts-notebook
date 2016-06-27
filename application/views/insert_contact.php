<?php

require_once LAYOUTS . '/header.php';

?>
        
        <section>
            <header>
                <h2>
                    Contact Form - Insert
                </h2>
            </header>

            <article>
                <form action="<?= URL_APPLICATION ?>/index.php?action=insert" method="post">
                    <fieldset>
                        <label for="nombre">Name:</label>
                        <input type="text" name="name" value="" placeholder="Introducing name" required/>
                        
                        <label for="apellidos">Last Name:</label>
                        <input type="text" name="lastName" value="" placeholder="Introducing last name" required/>
                        
                        <label for="direccion">Address:</label>
                        <input type="text" name="address" value="" placeholder="Introducing address" required/>
                        
                        <label for="telefono">Phone:</label>
                        <input type="tel" name="phone" value="" placeholder="Introducing phone" required/>
                        
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="" placeholder="Introducing email" required/>
                        
                        <label for="imagen">Image:</label>
                        <input type="file" name="image" value="" />
                        
                        <input class="boton" type="submit" name="send" value="Send" />
                    </fieldset>
                </form>
            </article>
        </section>
        
<?php

require_once LAYOUTS . '/footer.php';

?>