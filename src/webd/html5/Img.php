<?php
namespace webd\html5;

class Img extends Tag
{
    public $src = "";
    public $height = "";
    public $width = "";
    
    protected $tag = "img";
    
    public function __construct($src) {
        $this->src = $src;
    }
}

?>
