<?php
namespace ele\forms;

use std, gui, framework, ele;
use php\gui\UXDialog; 

class SavethePrincess extends AbstractForm
{
    /**
     * @event button_action.mouseDown-Left
     */
    function doButton_actionMouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        UXDialog::show('Упс! Произошла ошибка: приложение не опубликовано.', 'ERROR');
    }
}