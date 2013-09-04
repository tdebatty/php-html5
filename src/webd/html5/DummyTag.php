<?php
namespace \webd\html5;

class DummyTag extends Tag
{
    public function __toString() {
        return $this->content();
    }  
}
?>
