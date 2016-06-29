<?php

require_once LAYOUTS . '/header.php';

?>

        <section>
            <header>
                <h2>
                    Show Contact
                </h2>
            </header>

            <article id="contacto">
                <header>
                    <img src="<?= URL_IMAGES_DATA ?>/<?= $contact[6] ?>" alt="Foto" />
                </header>
                <ul>
                    <?php if(isset($contact)): ?>
                    <li><span>Name:</span><?= $contact[1] ?></li>
                    <li><span>Last Name:</span><?= $contact[2] ?></li>
                    <li id="address"><span>Address:</span><?= $contact[3] ?></li>
                    <li><span>Phone:</span><?= $contact[4] ?></li>
                    <li><span>E-mail:</span><?= $contact[5] ?></li>
                    <?php endif; ?>
                </ul>
                
                <div id="map"></div>
            </article>
        </section>
        
        <script type="text/javascript" src="<?= URL_JAVASCRIPT ?>/googlemaps.js"></script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5EtuucT0xdJcTUQmK4yispx_b_lKo6_s&callback=initMap" async defer></script>
        
<?php

require_once LAYOUTS . '/footer.php';

?>