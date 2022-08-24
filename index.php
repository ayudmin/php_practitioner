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

    <header>
        <h1><?= "Hello,  your input is " . htmlspecialchars($_GET['name']); ?></h1>
    </header>

</body>
</html>