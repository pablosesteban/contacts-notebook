<?php

require_once LAYOUTS . '/header.php';

?>
        
        <section>
            <header>
                <h2>
                    Contacts:
                </h2>
            </header>

            <article>
                <table>
                    <thead>
                        <th>Photo</th>
                        <th>Name</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                            if (isset($contacts) && $contacts != false) {
                                for ($index = 0; $index < count($contacts); $index++) {
                                    echo "<tr>"
                                    . "<td><img src=\"" . URL_IMAGES_DATA . "/" . $contacts[$index]->getImage() . "\" alt=\"Photo\" /></td>"
                                    . "<td>" . $contacts[$index]->getName() . "</td>"
                                    . "<td><a href=\"" . URL_APPLICATION . "/index.php?action=showContact&id=" . $contacts[$index]->getId() . "\"><img class=\"accion\" src=\"" . URL_IMAGES . "/view.png\" alt=\"View\" /></a></td>"
                                    . "<td><a href=\"" . URL_APPLICATION . "/index.php?action=editContactView&id=" . $contacts[$index]->getId() . "\"><img class=\"accion\" src=\"" . URL_IMAGES . "/edit.png\" alt=\"Edit\" /></a></td>"
                                    . "<td><a href=\"" . URL_APPLICATION . "/index.php?action=removeContact&id=" . $contacts[$index]->getId() . "\"><img class=\"accion\" src=\"" . URL_IMAGES . "/delete.png\" alt=\"Delete\" /></a></td>"
                                    . "</tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </article>
        </section>
        
<?php

require_once LAYOUTS . '/footer.php';

?>