<?php
namespace ele\forms;

use game;
use std, gui, framework, ele;
use action\Element; 
use php\io\Stream; 
use action\Animation; 
use php\gui\UXNode; 

class screen extends AbstractForm
{
    /**
     * @event circle_menu.mouseDown-Left 
     */
    function doCircle_menuMouseDownLeft(UXMouseEvent $e = null)
    {    
        $e = $event ?: $e;
        $current_version = (string)file_get_contents("https://ele.neocities.org/server/current_version.txt");
        if ($current_version == $GLOBALS['this_version'] and $GLOBALS['internet_connection'] == 'true') {
            $this->content->phys->loadScene('scroll_bar');
        }
        if ($current_version != $GLOBALS['this_version'] and $GLOBALS['internet_connection'] == 'true') {
            $header_error = (string)file_get_contents("https://ele.neocities.org/server/header_error.txt");
            $content_error = (string)file_get_contents("https://ele.neocities.org/server/content_error.txt");
            $this->content->phys->loadScene('error');
            Element::setText($this->form('error')->lbl_name_error, $header_error);
            Element::setText($this->form('error')->lbl_content_error, $content_error);
            Element::loadContentAsync($this->form('error')->img_error, 'https://ele.neocities.org/server/image_error.png', function () use ($e, $event) {});
        }
    }
    
    /**
     * @event circle_close.mouseDown-Left 
     */
    function doCircle_closeMouseDownLeft(UXMouseEvent $e = null)
    {    
        $e = $event ?: $e;
        app()->shutdown();
    }
}