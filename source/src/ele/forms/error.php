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
        $GLOBALS['link_error'] = file_get_contents("https://ele.ucoz.net/link_error.txt");
        browse($GLOBALS['link_error']);
    }

}
