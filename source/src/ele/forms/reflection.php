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
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        $GLOBALS['current_smartbook'] = file_get_contents("https://ele.ucoz.net/current_smartbook.txt");
        $GLOBALS['current_princess'] = file_get_contents("https://ele.ucoz.net/current_princess.txt");
        $GLOBALS['current_monuments'] = file_get_contents("https://ele.ucoz.net/current_monuments.txt");
        $GLOBALS['smartbook'] = $this->ini->get('smartbook','downloaded');
        $GLOBALS['princess'] = $this->ini->get('savetheprincess','downloaded');
        $GLOBALS['monuments'] = $this->ini->get('monument','downloaded');
        $this->toast('Тестовая сборка 0.2');
        waitAsync(5000, function () use ($e, $event) {
            $this->toast('Для скролла используйте мышку, прокрутка колёсиком и клавиатурой временно не работает.');
        });
    }




}
