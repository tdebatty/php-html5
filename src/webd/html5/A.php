<?php
namespace webd\html5;


class A extends Tag
{
    public $href = "";
    public $hreflang = "";
    public $media = "";
    public $rel = "";
    public $target = "";
    
    /**
     *
     * @var String MIME type of the linked document (e.g. "text/html")
     * See http://www.iana.org/assignments/media-types/ for list
     */
    public $type = "";
    
    const REL_NOFOLLOW = "nofollow";
    const REL_ALTERNATE = "alternate";
    const REL_AUTHOR = "author";
    const REL_BOOKMARK = "bookmark";
    const REL_HELP = "help";
    const REL_LICENSE = "license";
    const REL_NEXT = "next";
    const REL_NOFOLLOW = "nofollow";
    const REL_NOREFERRER = "noreferrer";
    const REL_PREFETCH = "prefetch";
    const REL_PREV = "prev";
    const REL_SEARCH = "search";
    const REL_TAG = "tag";
    
    public function __construct($href) {
        $this->href = $href;
    }
    
    protected $tag = "a";
}
?>
