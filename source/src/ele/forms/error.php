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
        browse('https://vk.com/elevk/');
    }

}
