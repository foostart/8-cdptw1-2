<!DOCTYPE html>
<html lang=en>
    <head>
        <title>30</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-30.less', 'css/type-30.css');
        ?>
        <link href="css/type-30.css" rel="stylesheet" type="text/css" />



    </head>
    <body>

        <?php include '../30/30-content.php'; ?>
        
    </body>

</html>
