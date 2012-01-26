<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/images/favicon.png" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
        <script type="text/javascript">SyntaxHighlighter.all();</script> 
        <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css' />
    </head>
    <body>
        <div class="pojemnik">
            <header>
                <h1><a href="#">clipboard</a></h1>
                <h2>everyone wants to paste</h2>
            </header>
            <nav>
                <ul>
                    <li><a href="<?php echo url_for('main/show')?>">Home</a></li>
                    <li><a href="<?php echo url_for('main/regulamin')?>">Regulamin</a></li>
                    <li><a href="<?php echo url_for('statistics/index')?>">Statystyka</a></li>
                    <li><a href="<?php echo url_for('main/show')?>">Kontakt</a></li>
                    <li><a href="<?php echo url_for('main/oserwisie')?>">O serwisie</a></li>
                </ul>
            </nav>     
            <div class="content">
                <?php echo $sf_content ?>
            </div>
            <br class="clearing" />
            <footer>
                <p>&copy; Copyright by KUL ZendFramework Programmers</p>
            </footer>
        </div>          
    </body>
</html>
