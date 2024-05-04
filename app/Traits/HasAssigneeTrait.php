<?php

namespace app\Traits;

trait HasAssigneeTrait
{

    protected $assignees = [];

    public function addAssignees($assignee)
    {
        $this->assignees[] = $assignee;
    }

    public function getAssignees()
    {

        return $this->assignees;
    }

}