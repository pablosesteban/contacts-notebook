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
                    if (isset($contacts) && $contacts != false) {
                        for ($index = 0; $index <= 2; $index++) {
                            if ($index < count($contacts)) {
                                echo "<li><a href=\"" . URL_APPLICATION . "/index.php?action=showContact&id=" . $contacts[$index]->getId() . "\"><img src=\"" . URL_IMAGES_DATA . "/" . $contacts[$index]->getImage() . "\" alt=\"Insert Contact\" /></a><p>" . $contacts[$index]->getName() . "</p></li>";
                            }
                        }
                    }
                    ?>
                </ul>
            </article>
            
            <article>
                <ul>
                    <?php
                    if (isset($contacts) && $contacts != false) {
                        for ($index = 3; $index <= 5; $index++) {
                            if ($index < count($contacts)) {
                                echo "<li><a href=\"" . URL_APPLICATION . "/index.php?action=showContact&id=" . $contacts[$index]->getId() . "\"><img src=\"" . URL_IMAGES_DATA . "/" . $contacts[$index]->getImage() . "\" alt=\"Insert Contact\" /></a><p>" . $contacts[$index]->getName() . "</p></li>";
                            }
                        }
                    }
                    ?>
                </ul>
            </article>
        </section>
        
<?php

require_once LAYOUTS . '/footer.php';

?>