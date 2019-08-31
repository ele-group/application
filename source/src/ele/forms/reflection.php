<?php
namespace ele\forms;

use std, gui, framework, ele;
use php\lib\str; 
use php\util\Regex; 
use action\Element; 

class reflection extends AbstractForm
{
    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {
        $e = $event ?: $e;
        $GLOBALS['this_version'] = '5.41';
        $GLOBALS['this_smartbook'] = $this->ini->get('this_smartbook','downloaded');
        $GLOBALS['this_princess'] = $this->ini->get('this_princess','downloaded');
        $GLOBALS['this_monuments'] = $this->ini->get('this_monuments','downloaded');
        $GLOBALS['link_error'] = file_get_contents("https://ele.ucoz.net/link_error.txt");
        $GLOBALS['header_error'] = file_get_contents("https://ele.ucoz.net/header_error.txt");
        $GLOBALS['content_error'] = file_get_contents("https://ele.ucoz.net/content_error.txt");
        $GLOBALS['current_version'] = file_get_contents("https://ele.ucoz.net/current_version.txt");
        $GLOBALS['current_smartbook'] = file_get_contents("https://ele.ucoz.net/current_smartbook.txt");
        $GLOBALS['current_princess'] = file_get_contents("https://ele.ucoz.net/current_princess.txt");
        $GLOBALS['current_monuments'] = file_get_contents("https://ele.ucoz.net/current_monuments.txt");
        $GLOBALS['smartbook'] = $this->ini->get('smartbook','downloaded');
        $GLOBALS['princess'] = $this->ini->get('savetheprincess','downloaded');
        $GLOBALS['monuments'] = $this->ini->get('monuments','downloaded');
        $this->toast('Стабильная версия, сборка 5.41');
        waitAsync(5000, function () use ($e, $event) {
            $this->toast('Для скролла используйте мышку.');
        });
    }
    
    /**
     * @event keyDown-Esc 
     */
    function doKeyDownEsc(UXKeyEvent $e = null)
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
}
