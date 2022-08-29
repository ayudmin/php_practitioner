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

    <h1>Task for Today</h1>

    <ul>
        
        <li>

            <strong>Name:</strong> <?= $todos['title'] ?>

        </li>

        <li>

            <strong>Assigned:</strong> <?= $todos['assigned_to'] ?>

        </li>

        <li>
            <strong>Status:</strong>

             <?php if ($todos['status']) : ?>

                <span class="icon">&#10004;</span>

            <?php else : ?>

                <span class="icon">&#33;</span>

            <?php endif ; ?>

        </li>

    </ul>

</body>
</html>