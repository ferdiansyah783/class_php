<?php

class Task{
    protected $description;
    protected $complete;

    public function __construct($description)
    {
        $this->description=$description;
    }

    public function complete()
    {
        $this->complete=true;
    }
    
    public function isComplete()
    {
        return $this->complete;
    }
    
    public function description()
    {
        return $this->description;
    }
}

$tasks=[
    new Task("one complete"),
    new Task("second done"),
    new Task("third clear")
];
$tasks[0]->complete();
// echo $task->getDescription();
// echo $task->getComplete();
// echo $task[1]->getDescription();