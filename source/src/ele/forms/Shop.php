<?php
namespace ele\forms;

use std, gui, framework, ele;
use action\Animation; 
use php\lib\Str; 
use php\util\Regex; 


class Shop extends AbstractForm
{


    /**
     * @event imageAlt.mouseDown-Left 
     */
    function doImageAltMouseDownLeft(UXMouseEvent $e = null)
    {    
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        Animation::fadeOut($this->getContextForm(), 500, function () use ($e, $event) {});
        if ($GLOBALS['exit'] == '1') {
            $this->loadForm('Smartbook', true, true);
            Animation::fadeIn($this->form('Smartbook'), 500, function () use ($e, $event) {});    
        }
        if ($GLOBALS['exit'] == '2') {
            $this->loadForm('SavethePrincess', true, true);
            Animation::fadeIn($this->form('SavethePrincess'), 500, function () use ($e, $event) {});    
        }
        if ($GLOBALS['exit'] == '3') {
            $this->loadForm('Monument', true, true);
            Animation::fadeIn($this->form('Monument'), 500, function () use ($e, $event) {});    
        }
    }

    /**
     * @event labelAlt.mouseDown-Left 
     */
    function doLabelAltMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }





    /**
     * @event keyDown-Esc 
     */
    function doKeyDownEsc(UXKeyEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        Animation::fadeOut($this->getContextForm(), 500, function () use ($e, $event) {});
        if ($GLOBALS['exit'] == '1') {
            $this->loadForm('Smartbook', true, true);
            Animation::fadeIn($this->form('Smartbook'), 500, function () use ($e, $event) {});    
        }
        if ($GLOBALS['exit'] == '2') {
            $this->loadForm('SavethePrincess', true, true);
            Animation::fadeIn($this->form('SavethePrincess'), 500, function () use ($e, $event) {});    
        }
        if ($GLOBALS['exit'] == '3') {
            $this->loadForm('Monument', true, true);
            Animation::fadeIn($this->form('Monument'), 500, function () use ($e, $event) {});    
        }

    }

    /**
     * @event image.mouseDown-Left 
     */
    function doImageMouseDownLeft(UXMouseEvent $e = null)
    {    
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        Animation::fadeOut($this->getContextForm(), 500, function () use ($e, $event) {});
        if ($GLOBALS['exit'] == '1') {
            $this->loadForm('Smartbook', true, true);
            Animation::fadeIn($this->form('Smartbook'), 500, function () use ($e, $event) {});    
        }
        if ($GLOBALS['exit'] == '2') {
            $this->loadForm('SavethePrincess', true, true);
            Animation::fadeIn($this->form('SavethePrincess'), 500, function () use ($e, $event) {});    
        }
        if ($GLOBALS['exit'] == '3') {
            $this->loadForm('Monument', true, true);
            Animation::fadeIn($this->form('Monument'), 500, function () use ($e, $event) {});    
        }
    }

    /**
     * @event image3.mouseDown-Left 
     */
    function doImage3MouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }






}
