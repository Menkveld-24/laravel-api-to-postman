<?php

namespace AndreasElia\PostmanGenerator;

class PostmanExporter
{
    public string $filename;

    public function setFilename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }
}