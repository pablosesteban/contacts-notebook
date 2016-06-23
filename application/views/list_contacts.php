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
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="img/tux01.jpg" alt="Foto Fernando" /></td>
                            <td>Fernando</td>
                            <td><a href="#"><img class="accion" src="img/view.png" alt="Ver" /></a></td>
                            <td><a href="#"><img class="accion" src="img/edit.png" alt="Editar" /></a></td>
                            <td><a href="#"><img class="accion" src="img/delete.png" alt="Borrar" /></a></td>
                        </tr>
                        <tr>
                            <td><img src="img/tux02.jpg" alt="Foto Luis" /></td>
                            <td>Luis</td>
                            <td><a href="#"><img class="accion" src="img/view.png" alt="Ver" /></a></td>
                            <td><a href="#"><img class="accion" src="img/edit.png" alt="Editar" /></a></td>
                            <td><a href="#"><img class="accion" src="img/delete.png" alt="Borrar" /></a></td>
                        </tr>
                        <tr>
                            <td><img src="img/tux03.jpg" alt="Foto Andres" /></td>
                            <td>Andres</td>
                            <td><a href="#"><img class="accion" src="img/view.png" alt="Ver" /></a></td>
                            <td><a href="#"><img class="accion" src="img/edit.png" alt="Editar" /></a></td>
                            <td><a href="#"><img class="accion" src="img/delete.png" alt="Borrar" /></a></td>
                        </tr>
                        
                    </tbody>
                </table>
            </article>
            
        </section>
        
<?php

require_once LAYOUTS . '/footer.php';

?>