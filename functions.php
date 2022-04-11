<?php 



function connectToDb()
{
    try {

        return  new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'mansnothot');
    
    } catch (PDOException $e){
        
        die($e->getMessage());
    }


}


function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}

function dd($data){


    echo '<pre>';

    die(var_dump($data));

    echo '</pre>';

}


function is_allowed($age){

    if ($age > 21){

        return true;

    } else{
        
        return false;
    }

}



?>