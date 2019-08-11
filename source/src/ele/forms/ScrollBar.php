<?php
namespace ele\forms;

use std, gui, framework, ele;


class ScrollBar extends AbstractForm
{

    /**
     * @event panel6.mouseEnter 
     */
    function doPanel6MouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel6.mouseExit 
     */
    function doPanel6MouseExit(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel5.mouseEnter 
     */
    function doPanel5MouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel5.mouseExit 
     */
    function doPanel5MouseExit(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event image3.mouseEnter 
     */
    function doImage3MouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event image3.mouseExit 
     */
    function doImage3MouseExit(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel4.mouseEnter 
     */
    function doPanel4MouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel4.mouseExit 
     */
    function doPanel4MouseExit(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event imageAlt.mouseEnter 
     */
    function doImageAltMouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event imageAlt.mouseExit 
     */
    function doImageAltMouseExit(UXMouseEvent $e = null)
    {    
        
    }





    /**
     * @event panel7.mouseEnter 
     */
    function doPanel7MouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel7.mouseExit 
     */
    function doPanel7MouseExit(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event image4.mouseEnter 
     */
    function doImage4MouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event image4.mouseExit 
     */
    function doImage4MouseExit(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel9.mouseEnter 
     */
    function doPanel9MouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel9.mouseExit 
     */
    function doPanel9MouseExit(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel8.mouseEnter 
     */
    function doPanel8MouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel8.mouseExit 
     */
    function doPanel8MouseExit(UXMouseEvent $e = null)
    {    
        
    }






    /**
     * @event panel.step 
     */
    function doPanelStep(UXEvent $e = null)
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
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        $this->originForm('screen')->game->phys->loadScene('Smartbook');
        if ($GLOBALS['current_smartbook'] != 'Testing') {
            Element::setText($this->form('Smartbook')->button, 'Обновить');
        }
        if ($GLOBALS['smartbook'] == "true") {
            Element::setText($this->form('Smartbook')->button, 'Запустить');
        }
    }

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        $this->originForm('screen')->game->phys->loadScene('SavethePrincess');
        if ($GLOBALS['current_princess'] != 'Testing') {
            Element::setText($this->form('SavethePrincess')->button, 'Обновить');
        }
        if ($GLOBALS['princess'] == "true") {
            Element::setText($this->form('SavethePrincess')->button, 'Запустить');
        }
    }

    /**
     * @event image4.click-Left 
     */
    function doImage4ClickLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        $this->originForm('screen')->game->phys->loadScene('Monument');
        if ($GLOBALS['current_monuments'] != 'Testing') {
            Element::setText($this->form('Monument')->button, 'Обновить');
        }
        if ($GLOBALS['monuments'] == "true") {
            Element::setText($this->form('Monument')->button, 'Запустить');
        }
    }

    /**
     * @event button.mouseDown-Left 
     */
    function doButtonMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }


























}
