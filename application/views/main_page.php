<?php

require_once LAYOUTS . '/header.php';

?>
        
        <section>
            <header>
                <h2>
                    Most Viewed Contacts:
                </h2>
            </header>

            <article>
                <ul>
                    <?php
                    if (isset($contacts)) {
                        for ($index = 0; $index <= 2; $index++) {
                            echo "<li><img src=\"<?=" . URL_IMAGES . "?>/tux01.jpg\" alt=\"Insert Contact\" /><p>" . $contacts[$index]->getName() . "</p></li>";
                        }
                    }
                    ?>
                </ul>
            </article>
            
            <article>
                <ul>
                    <?php
                    if (isset($contacts)) {
                        for ($index = 3; $index <= 5; $index++) {
                            echo "<li><img src=\"<?=" . URL_IMAGES . " ?>/tux01.jpg\" alt=\"Insert Contact\" /><p>" . $contacts[$index]->getName() . "</p></li>";
                        }
                    }
                    ?>
                </ul>
            </article>
        </section>
        
<?php

require_once LAYOUTS . '/footer.php';

?>