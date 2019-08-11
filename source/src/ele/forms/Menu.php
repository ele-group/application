<?php
namespace ele\forms;

use std, gui, framework, ele;
use action\Element; 
use php\io\Stream; 
use action\Animation; 


class Menu extends AbstractForm
{




    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        if ($GLOBALS['off'] == '1') {
            Animation::fadeOut($this->getContextForm(), 500, function () use ($e, $event) {});
            $this->systemTray->free();
            app()->shutdown();
        }
        $news = file_get_contents("http://eleapp.my1.ru/news.txt");
        $GLOBALS['update'] = file_get_contents("http://eleapp.my1.ru/update.txt");
        Element::loadContentAsync($this->image5, 'http://eleapp.my1.ru/publicity.png', function () use ($e, $event) {});
        if ($GLOBALS['update'] != '375' && $GLOBALS['flag']==0)
            Animation::fadeIn($this->image7, 500, function () use ($e, $event) {});
        if ($GLOBALS['update'] == '375' && $GLOBALS['flag']==0)
            $this->image7->free();
        $GLOBALS['flag'] = 1;
            
        
    }






    /**
     * @event keyDown-Esc 
     */
    function doKeyDownEsc(UXKeyEvent $e = null)
    {    
        
    }


    /**
     * @event img_update.mouseDown-Left 
     */
    function doImg_updateMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event keyDown-D 
     */
    function doKeyDownD(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event keyDown-J 
     */
    function doKeyDownJ(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event scroll-Down 
     */
    function doScrollDown(UXScrollEvent $e = null)
    {    
        
    }



    /**
     * @event panel.mouseEnter 
     */
    function doPanelMouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel.mouseExit 
     */
    function doPanelMouseExit(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panelAlt.mouseEnter 
     */
    function doPanelAltMouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panelAlt.mouseExit 
     */
    function doPanelAltMouseExit(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event circle6.mouseDown-Left 
     */
    function doCircle6MouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }


    /**
     * @event panelAlt.mouseDrag 
     */
    function doPanelAltMouseDrag(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel.mouseDown-Left 
     */
    function doPanelMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }






































































}
