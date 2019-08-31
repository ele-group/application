<?php
namespace ele\forms;

use std, gui, framework, ele;
use php\gui\UXDialog; 

class monuments extends AbstractForm
{
    /**
     * @event button_action.mouseDown-Left
     */
    function doButton_actionMouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $monuments_btn = uiText($e->sender);
        if ($monuments_btn == 'Скачать') {
            browse('https://github.com/ele-group/monuments/raw/master/Памятники%20природы%20Александровского%20района.exe');
            app()->shutdown();
        }
        if ($monuments_btn == 'Обновить') {
            browse('https://github.com/ele-group/monuments/raw/master/Памятники%20природы%20Александровского%20района.exe');  
            app()->shutdown();
        }
        if ($monuments_btn == 'Запустить') {
            open('./Памятники природы Александровского района.exe');
        }
    }
}