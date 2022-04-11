<?php 



class Task {

    public $description;

    public $completed = false;

    public function __construct($description)

    {
        $this->description = $description;

    }


    public function complete()

    {

        $this->completed = true;

    }

    public function isComplete()

    {
        return $this->completed;
    }

}

$tasks = [

    new Task('Go surfing'),

    new Task('Finish my screencast'),

    new Task('Clean my room')
];


$tasks[0]->complete();


require 'index.view.php';
