<?php
use app\Classes\DeadlineTask;
use app\Classes\TaggedDeadlineTask;

include 'autoloader.php';



$task1 = new TaggedDeadlineTask('Task 1', 'Should be done withing next week', '04-10-2023', '07-04-2023');


$task1->addTags('Front End');
$task1->addTags('Contact Page');
$task1->addAssignees('Roy');
$task1->addAssignees('Helen');


$task2 = new DeadlineTask('Task 2', 'Should bd done within next year', '01-01-2024', '09-12-2024');
$task2->addAssignees('Tony');

$tasks = [$task1, $task2];


foreach ($tasks as $task) {

    echo "Title :" . $task->getTitle() . PHP_EOL;
    echo "Description :" . $task->getDescription() . PHP_EOL;
    echo "Start Date :" . $task->getStartDate() . PHP_EOL;
    echo "Due Date :" . $task->getDueDate() . PHP_EOL;

    if ($task instanceof TaggedDeadlineTask) {
        echo "Tags :" . implode(',', $task->getTags()) . PHP_EOL;
    }
    echo "Assignees :" . implode(',', $task->getAssignees()) . PHP_EOL;

    echo "Priority :" . $task->getPriority() . PHP_EOL;

    echo "Completed : " . ($task->isCompleted() ? 'Yes' : 'No') . "\n\n";



}

$task1->markAsCompleted();
echo "After marking task one as completed \n";

echo "Completed :" . ($task1->isCompleted() ? 'Yes' : 'No') . PHP_EOL;
