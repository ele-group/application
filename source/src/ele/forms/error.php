<?php
namespace ele\forms;

use std, gui, framework, ele;

class error extends AbstractForm
{
    /**
     * @event button_error.mouseDown-Left
     */
    function doButton_errorMouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $link_error = "https://vk.com/ele_team";
        browse($link_error);
        app()->shutdown();
    }

}
