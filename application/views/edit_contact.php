<?php

require_once LAYOUTS . '/header.php';

?>
        
        <section>
            <header>
                <h2>
                    Contact Form - Edit
                </h2>
            </header>

            <article>
                <form action="<?= URL_APPLICATION ?>/index.php?action=editContact&id=<?= $contact[0] ?>" enctype="multipart/form-data" method="post">
                    <fieldset>
                        <img src="<?= URL_IMAGES_DATA ?>/<?= $contact[6] ?>" alt="Contact Photo" />

                        <label for="nombre">Name:</label>
                        <input type="text" name="name" value="<?= $contact[1] ?>" placeholder="Introducing name" required/>
                        
                        <label for="apellidos">LastName:</label>
                        <input type="text" name="lastName" value="<?= $contact[2] ?>" placeholder="Introducing last name" required/>
                        
                        <label for="direccion">Address:</label>
                        <input type="text" name="address" value="<?= $contact[3] ?>" placeholder="Introducing address" required/>
                        
                        <label for="telefono">Phone:</label>
                        <input type="tel" name="phone" value="<?= $contact[4] ?>" placeholder="Introducing phone" required/>
                        
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="<?= $contact[5] ?>" placeholder="Introducing email" required/>
                        
                        <label for="imagen">Image:</label>
                        <input type="file" name="image" value="<?= $contact[6] ?>" />
                        
                        <input type="hidden" name="visits" value="<?= $contact[7] ?>">

                        <input class="boton" type="submit" name="send" value="Update" />
                    </fieldset>
                </form>
            </article>
        </section>
        
<?php

require_once LAYOUTS . '/footer.php';

?>