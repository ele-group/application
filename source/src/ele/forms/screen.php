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
        $GLOBALS['current_version'] = file_get_contents("https://ele.ucoz.net/current_version.txt");
        if ($GLOBALS['current_version'] == $GLOBALS['this_version'] and $GLOBALS['internet_connection'] == 'true') {
            $this->content->phys->loadScene('scroll_bar');
        }
        if ($GLOBALS['current_version'] != $GLOBALS['this_version'] and $GLOBALS['internet_connection'] == 'true') {
            $GLOBALS['header_error'] = file_get_contents("https://ele.ucoz.net/header_error.txt");
            $GLOBALS['content_error'] = file_get_contents("https://ele.ucoz.net/content_error.txt");
            $this->content->phys->loadScene('error');
            Element::setText($this->form('error')->lbl_name_error, $GLOBALS['header_error']);
            Element::setText($this->form('error')->lbl_content_error, $GLOBALS['content_error']);
            Element::loadContentAsync($this->form('error')->img_error, 'https://ele.ucoz.net/image_error.png', function () use ($e, $event) {});
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