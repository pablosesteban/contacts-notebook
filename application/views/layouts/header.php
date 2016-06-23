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
        </header>
        
        <nav>
            <ul>
                <li><a href="<?= URL_APPLICATION ?>/index.php"><img src="<?= URL_IMAGES ?>/home.png" alt="Main" /><span>Main</span></a></li>
                <li><a href="<?= URL_APPLICATION ?>/index.php?action=list"><img src="<?= URL_IMAGES ?>/list.png" alt="List Contact" /><span>List Contact</span></a></li>
                <li><a href="<?= URL_APPLICATION ?>/index.php?action=insert"><img src="<?= URL_IMAGES ?>/add.png" alt="Insert Contact" /><span>Insert Contact</span></a></li>
            </ul>
        </nav>