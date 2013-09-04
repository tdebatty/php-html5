<?php

namespace webd\html5;

class Tag
{
    /*
     * Global HTML5 attributes
     * http://www.w3schools.com/tags/ref_standardattributes.asp
     */
    public $id = "";
    
    public $accesskey = "";
    public $contenteditable = "";
    public $contextmenu = "";
    public $dir = "";
    public $draggable = "";
    public $dropzone = "";
    public $hidden = "";
    public $lang = "";
    public $spellcheck = "";
    public $style = "";
    public $tabindex = "";
    public $title = "";
    public $translate = "";
    
    
    /**
     *
     * @var Tag[] 
     */
    protected $children = array();
    
    /**
     *
     * @var Tag 
     */
    protected $parent = null;
    
    
    protected $classes = array();
    
    protected $tag = "";
    
    

    
    public function appendChild(Tag $child) {
        $this->children[] = $child;
        $child->parent = $this;
    }
    
    public function getParent() {
        return $this->parent;
    }
    
    public function addClass($class) {
        $this->classes[] = $class;
    }
    
    public function __toString() {

        $return = "<";
        $return .= $this->tag();
        $return .= $this->id();
        $return .= $this->classes();
        $return .= $this->attributes();
        $return .= ">";
        
        $return .= $this->content();
        
        $return .= "</" . $this->tag() . ">\n";

        return $return;
    }
    
    public function tag() {
        return $this->tag;
    }
    
    public function id() {
        
        if ($this->id != "") {
            return " id='{$this->id}'";
        }
        return "";
    }
    
    public function classes() {
        $return = "";
        if (count($this->classes)) {
            $return .= " class='" . implode(" ", $this->classes) . "'";
        }
        return $return;
    }
    
    public function attributes() {
        $return = "";
        $reflection = new \ReflectionObject($this);
        foreach ($reflection->getProperties() as $property) {
            /* @var $property \ReflectionProperty */
            if ($property->isPublic() AND $property->name != "id") {
                $value = $property->getValue($this);
                if ($value != "") {
                    $return .= " {$property->name}='$value'";
                }
            }
        }
        return $return;
    }
    
    public function content() {
        return trim(implode(" ", $this->children));
    }
}
?>