<<<<<<< Updated upstream
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


        <h1>Chgrp</h1>
        <h2>Retorno</h2>
        TRUE ou FALSE
        <h2>Descrição</h2>
        bool chgrp ( string $filename , mixed $group )
        <br />
        <p>
            A execução deste comando dependerá das permissões do usuário.
        </p>
        <h3>Exemplo com chamada dinâmica</h3>
        <pre class="brush: php;">
        chgrp($filename, $group);
        </pre>
        <h3>Exemplo com chamada fixa</h3>
        <pre class="brush: php;">
        chgrp("chgrp_arquivo.txt", "admin");
        </pre>
        <br />
        <a href="basename.php">Anterior</a> | <a href="chmod.php">próximo</a>
        <h4>Referência</h4>
        <a href="http://www.php.net/manual/pt_BR/function.chgrp.php">Manual PHP</a>

</html>
=======
<?php

//É necessário que o usuário tenha acesso a este arquivo para poder modificalo, 
//As modificações de grupo funcionam na mesma forma em que comando no linux
//o arquivo chgrp_arquivo.txt esta com permissão 777

if (chgrp("chgrp_arquivo.txt", "root"))
    echo "mudou para root\n<br />";

if (chgrp("chgrp_arquivo.txt", "kleber"))
    echo "mudou para kleber\n<br />";
?>
>>>>>>> Stashed changes
