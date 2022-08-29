<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php learning</title>
    <style type="text/css">
        
        header {

            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>

    <ul>
        
        <?php foreach ($person as $feature => $value ) : ?>

            <li><strong> <b><?= $feature ?></b> </strong> <i><?= $value; ?></i></li>

        <?php endforeach; ?>

    </ul>

</body>
</html>