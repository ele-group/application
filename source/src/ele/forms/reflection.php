<?php
namespace ele\forms;

use std, gui, framework, ele;
use php\lib\str; 
use php\util\Regex; 
use action\Element; 
use php\gui\UXDialog; 

class reflection extends AbstractForm
{
    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {
        $e = $event ?: $e;
        $GLOBALS['this_version'] = "5.7";
        $GLOBALS['this_smartbook'] = $this->ini->get('this_smartbook','downloaded');
        $GLOBALS['this_princess'] = $this->ini->get('this_princess','downloaded');
        $GLOBALS['this_monuments'] = $this->ini->get('this_monuments','downloaded');
        $link_error = (string)file_get_contents("https://ele.neocities.org/server/link_error.txt");
        $header_error = (string)file_get_contents("https://ele.neocities.org/server/header_error.txt");
        $content_error = (string)file_get_contents("https://ele.neocities.org/server/content_error.txt");
        $current_version = (string)file_get_contents("https://ele.neocities.org/server/current_version.txt");
        $current_smartbook = (string)file_get_contents("https://ele.neocities.org/server/current_smartbook.txt");
        $current_princess = (string)file_get_contents("https://ele.neocities.org/server/current_princess.txt");
        $current_monuments = (string)file_get_contents("https://ele.neocities.org/server/current_monuments.txt");
        $GLOBALS['smartbook'] = $this->ini->get('smartbook','downloaded');
        $GLOBALS['princess'] = $this->ini->get('savetheprincess','downloaded');
        $GLOBALS['monuments'] = $this->ini->get('monuments','downloaded');
        $this->toast('Стабильная версия, сборка 5.7');
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

}
