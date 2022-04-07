<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Learning</title>

    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center
        }
    </style>
</head>
<body>

        <h1>Task for the day</h1>
 
        <ul>
            <li>
                <strong>Name: </strong><?= $task['title'];?>
            </li>
            <li>
                <strong>Due: </strong><?= $task['due'];?>
            </li>
            <li>
                <strong>Status: </strong><?= $task['completed'] ? 'complete' : 'Incomplete'; ?>
            </li>
            <li>
                <strong>Assigned_to: </strong><?= $task['Assigned_to'];?>
            </li>
        </ul>
    
</body>
</html>