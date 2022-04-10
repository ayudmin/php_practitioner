<?php 


require 'functions.php';

class Task {

    protected $description;

    protected $completed = false;

    public function __construct($description)

    {
        $this->description = $description;

    }

    public function isComplete()

    {
        return $this->completed;
    }

}

$task = new Task('Go surfing');

dd($task->isComplete());

require 'index.view.php';
