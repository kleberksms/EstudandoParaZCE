<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Estudando Para Zend</title>
        <script type="text/javascript" src="../../js/scripts/shCore.js"></script>
        <script type="text/javascript" src="../../js/scripts/shBrushPhp.js"></script>
        <link type="text/css" rel="stylesheet" href="../../js/styles/shCoreDefault.css"/>
        <script type="text/javascript">SyntaxHighlighter.all();</script>
    </head>

    <body style="background: white; font-family: Helvetica">


        <h1>Basename</h1>
        <h3>Resposta do echo</h3>
        <?php
        $caminho = "/home/httpd/html/index.php";

        $arquivo = basename($caminho);        // $arquivo = "index.php"

        echo "<br />Basename com o caminha mais a extensão: ";
        echo $arquivo;

        $arquivo = basename($caminho, ".php"); // $arquivo = "index"

        echo "<br /> Basename somente com o nome do arquivo: ";
        echo $arquivo;
        echo "<br />";
        ?>
        <pre class="brush: php;">
        $caminho = "/home/httpd/html/index.php";

        $arquivo = basename($caminho);        // $arquivo = "index.php"

        echo "<br />Basename com o caminha mais a extensão<br />";
        echo $arquivo;

        $arquivo = basename($caminho, ".php"); // $arquivo = "index"

        echo "\n Basename somente com o nome do arquivo\n";
        echo $arquivo;
        echo "<br />";
        </pre>
        <br />
        <a href="chgrp.php">próximo</a>
        <h4>Referência</h4>
        <a href="http://www.php.net/manual/pt_BR/function.basename.php">Manual PHP</a>

</html>


