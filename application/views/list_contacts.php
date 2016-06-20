<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/estilo.css" />
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <title>Agenda de Contactos - Listar Contactos</title>
    </head>
    <body>
        <header>
                <h1>Agenda de Contactos</h1>
        </header>
        
        <nav>
            <ul>
                <li><a href="#"><img src="img/home.png" alt="Inicio" /><span>Inicio</span></a></li>
                <li><a href="#"><img src="img/list.png" alt="Listar Contacto" /><span>Listar Contactos</span></a></li>
                <li><a href="#"><img src="img/add.png" alt="Insertar Contacto" /><span>Insertar Contactos</span></a></li>
            </ul>
        </nav>
        
        <section>
            <header>
                <h2>
                    Contactos:
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
        
        <footer>
            <p>Copyright &copy; Curso Desarrollo de Aplicaciones Web</p>
        </footer>
    </body>
</html>