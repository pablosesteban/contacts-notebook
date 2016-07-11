<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href='<?= URL_CSS ?>/styles.css' />
        <title>Contacts Notebook</title>
    </head>
    <body>
        <header>
                <h1>Contacts Notebook</h1>
                
                <?php if(isset($_SESSION['user'])): ?>
                <p id="usuario_login"><?= $user['userName']; ?></p>
                <p><a href="<?= URL_APPLICATION . "/index.php?action=quit" ?>">Logout</a></p>
                <?php else: ?>
                <p><a href="<?= URL_APPLICATION . "/index.php" ?>">Login</a></p>
                <?php endif; ?>
        </header>
        
        <?php if(isset($_SESSION['user'])): ?>
        <nav>
            <ul>
                <li><a href="<?= URL_APPLICATION ?>/index.php?action=main"><img src="<?= URL_IMAGES ?>/home.png" alt="Main" /><span>Main</span></a></li>
                <li><a href="<?= URL_APPLICATION ?>/index.php?action=listContacts"><img src="<?= URL_IMAGES ?>/list.png" alt="List Contacts" /><span>List Contacts</span></a></li>
                <li><a href="<?= URL_APPLICATION ?>/index.php?action=insertContactView"><img src="<?= URL_IMAGES ?>/add.png" alt="Insert Contact" /><span>Insert Contact</span></a></li>
                <?php if($user['userRol'] == "admin"): ?>
                <li><a href="<?= URL_APPLICATION . "/index.php?action=listUsers" ?>"><img src="<?= URL_IMAGES ?>/list.png" alt="Listar Usuarios" /><span>List Users</span></a></li>
                <li><a href="<?= URL_APPLICATION . "/index.php?action=insertUserView" ?>"><img src="<?= URL_IMAGES ?>/add.png" alt="Insertar Usuario" /><span>Insert User</span></a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <?php endif; ?>