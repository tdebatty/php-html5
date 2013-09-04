<?php

class Text extends Tag
{

    public $value = "";
    
    public function __toString() {
        return trim($this->value);
    }
    
    public function content() {
        return trim($this->value);
    }
}
?>
