<?php

namespace App\framwork;

class View{
    protected string $layout = "layouts.admin"; 
    public function __construct(protected string $path, protected array $data = []) 
    {

    }
    public function render():string
    {
       
        $template = $this->load($this->layout);
        $content = $this->load($this->path);
        
        return \str_replace('{{ $content }}', $content, $template);
    }
    private function load($path) : string {
        $path = \str_replace(".","/", $path);
        \ob_start();
        \extract($this->data);
        include(VIEW_PATH."/".$path.".php");
        return (string)\ob_get_clean();

    }
}