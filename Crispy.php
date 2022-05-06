<?php

class File 
{
    public function __construct(string $file)
    {
       $this->file = $file; 
    }

    public function write($content) 
    {
        $file = fopen($this->file, "a+");
        if(!$file) return false;
        fwrite($file, $content);    
    }
}


class Crispy 
{
    public function __construct(string $file, $content)
    {
        $file = new File($file);
        $file->write($content); 
    }
}


$crispy = new Crispy($argv[1], $argv[2]);
