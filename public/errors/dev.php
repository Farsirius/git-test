<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ошибка!</title>
    </head>
    <body>
        <h1>Произошла ошибка!</h1>
        <p><b>Код ошибки: </b><?php echo $errno ?></p>
        <p><b>Текст ошибки: </b><?php echo $errstr ?></p>
        <p><b>Файл с ошибкой: </b><?php echo $errfile ?></p>
        <p><b>Строка с ошибкой: </b><?php echo $errline ?></p>
    </body>
</html>