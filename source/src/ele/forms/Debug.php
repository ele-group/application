<?php
namespace ele\forms;

use std, gui, framework, ele;
use action\Animation; 


class Debug extends AbstractForm
{


    /**
     * @event imageAlt.mouseDown-Left 
     */
    function doImageAltMouseDownLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        Animation::fadeOut($this->getContextForm(), 500, function () use ($e, $event) {});
        if ($GLOBALS['old'] == 1) {
            $this->loadForm('Old', true, true);
            Animation::fadeIn($this->form('Old'), 500, function () use ($e, $event) {});
        } else {
            $this->loadForm('Menu', true, true);
            Animation::fadeIn($this->form('Menu'), 500, function () use ($e, $event) {});
        }
        
    }

    /**
     * @event labelAlt.mouseDown-Left 
     */
    function doLabelAltMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }



    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        $inetEnabled = file_get_contents('http://ya.ru') !== false;
        
        if ($inetEnabled) {
            Element::setText($this->label10, 'Вы подключены к сети Интернет');
            $this->object->sprite->currentAnimation = 'yes';
        } else {
            Element::setText($this->label10, 'Вы не подключены к сети Интернет');
        }
        Element::appendText($this->label4, file_get_contents("http://eleapp.my1.ru/update.txt"));
    }

    /**
     * @event keyDown-Esc 
     */
    function doKeyDownEsc(UXKeyEvent $e = null)
    {    
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        Animation::fadeOut($this->getContextForm(), 500, function () use ($e, $event) {});
        if ($GLOBALS['old'] == 1) {
            $this->loadForm('Old', true, true);
            Animation::fadeIn($this->form('Old'), 500, function () use ($e, $event) {});
        } else {
            $this->loadForm('Menu', true, true);
            Animation::fadeIn($this->form('Menu'), 500, function () use ($e, $event) {});
        }
    }

    /**
     * @event image.mouseDown-Left 
     */
    function doImageMouseDownLeft(UXMouseEvent $e = null)
    {    
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        Animation::fadeOut($this->getContextForm(), 500, function () use ($e, $event) {});
        if ($GLOBALS['old'] == 1) {
            $this->loadForm('Old', true, true);
            Animation::fadeIn($this->form('Old'), 500, function () use ($e, $event) {});
        } else {
            $this->loadForm('Menu', true, true);
            Animation::fadeIn($this->form('Menu'), 500, function () use ($e, $event) {});
        }
    }






}
