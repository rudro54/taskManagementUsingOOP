<?php

namespace app\Traits;

trait HasTagsTrait
{

    protected $tags = [];

    public function addTags($tag)
    {
        $this->tags[] = $tag;
    }

    // Getter

    public function getTags()
    {
        return $this->tags;
    }

}