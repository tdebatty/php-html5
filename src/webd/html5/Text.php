<?php
namespace webd\html5;

class Text extends Tag
{

    public $value = "";
    
    public function __construct($value) {
        $this->value = $value;
    }
    
    public function __toString() {
        return trim($this->value);
    }
}
?>
