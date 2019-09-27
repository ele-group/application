<?php
namespace ele\forms;

use std, gui, framework, ele;
use php\gui\UXDialog; 

class save_the_princess extends AbstractForm
{
    /**
     * @event button_action.mouseDown-Left
     */
    function doButton_actionMouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $monuments_btn = uiText($e->sender);
        if ($monuments_btn == 'Скачать') {
            browse('https://github.com/ele-group/savetheprincess/raw/master/Save%20the%20Princess.exe');
            app()->shutdown();
        }
        if ($monuments_btn == 'Обновить') {
            browse('https://github.com/ele-group/savetheprincess/raw/master/Save%20the%20Princess.exe');  
            app()->shutdown();
        }
        if ($monuments_btn == 'Запустить') {
            open('./Save the Princess.exe');
        }
    }
}