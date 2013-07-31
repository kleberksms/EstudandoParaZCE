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


        <h1>Chmod</h1>
        <h2>Retorno</h2>
        TRUE ou FALSE
        <br />
        <h2>Descrição</h2>
        bool chmod ( string $filename , int $mode )
        <br />
        <p>
            A execução deste comando dependerá das permissões do usuário.
        </p>
        <h3>Atenção</h3>
        <p>
            Diferente do comenando no terminal, a função só receberá inteiros no segundo parâmetro.
        </p>
        <pre class="brush: php;">
            chmod ("/arquivo/diretorio", 755);   // decimal; provavelmente incorreto
            chmod ("/arquivo/diretorio", "u+rwx,go+rx"); // string; incorreto
            chmod ("/arquivo/diretorio", 0755);  // octal; representação correta do modo
        </pre>
        <br />
        <pre class="brush: php;">
            // Escrita e leitura para o proprietario, nada ninguem mais
            chmod ("/somedir/somefile", 0600);

            // Escrita e leitura para o proprietario, leitura para todos os outros
            chmod ("/somedir/somefile", 0644);

            // Tudo para o proprietario, leitura e execucao para os outros
            chmod ("/somedir/somefile", 0755);

            // Tudo para o proprietario, leitura e execucao para o grupo do proprietário
            chmod ("/somedir/somefile", 0750);
        </pre>
        <a href="chgrp.php">Anterior</a> | <a href="chown.php">próximo</a>
        <h4>Referência</h4>
        <a href="http://www.php.net/manual/pt_BR/function.chmod.php">Manual PHP</a>

</html>
