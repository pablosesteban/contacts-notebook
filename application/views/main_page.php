<?php

require_once LAYOUTS . '/header.php';

?>
        
        <section>
            <header>
                <h2>
                    Last Viewed Contacts:
                </h2>
            </header>

            <article>
                <ul>
                    <li><img src="<?= URLIMAGES ?>/tux01.jpg" alt="Insert Contact" /><p>Fernando</p></li>
                    <li><img src="<?= URLIMAGES ?>/tux02.jpg" alt="Insert Contact" /><p>Luis</p></li>
                    <li><img src="<?= URLIMAGES ?>/tux03.jpg" alt="Insert Contact" /><p>Andres</p></li>
                </ul>
            </article>
            
            <article>
                <ul>
                    <li><img src="<?= URLIMAGES ?>/tux04.jpg" alt="Insert Contact" /><p>Pedro</p></li>
                    <li><img src="<?= URLIMAGES ?>/tux05.jpg" alt="Insert Contact" /><p>Ana</p></li>
                    <li><img src="<?= URLIMAGES ?>/tux06.jpg" alt="Insert Contact" /><p>Teodoro</p></li>
                </ul>
            </article>
        </section>
        
<?php

require_once LAYOUTS . '/footer.php';

?>