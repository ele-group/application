<?php
namespace ele\forms;

use std, gui, framework, ele;
use action\Geometry; 
use action\Animation; 
use php\gui\UXDialog; 

class scroll_bar extends AbstractForm
{
    /**
     * @event panel_news.step
     */
    function doPanel_newsStep(UXEvent $e = null)
    {
        $e = $event ?: $e;
        if (!Geometry::intersect($e->sender, $this->panel_apps))
        {
            Animation::fadeIn($e->sender, 500);
            Animation::fadeOut($this->image_swipe, 250);
            Animation::fadeIn($this->image_swipe_mirror, 250);
        }
        if (Geometry::intersect($e->sender, $this->panel_apps))
        {
            Animation::fadeOut($e->sender, 500);
            Animation::fadeOut($this->image_swipe_mirror, 250);
            Animation::fadeIn($this->image_swipe, 250);
        }
    }
    
    /**
     * @event button_news.mouseDown-Left 
     */
    function doButton_newsMouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        browse('https://ele-group.github.io/monuments/');
    }

    /**
     * @event image_smartbook.click-Left 
     */
    function doImage_smartbookClickLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $this->originForm('screen')->content->phys->loadScene('smartbook');
        if ($GLOBALS['current_smartbook'] != $GLOBALS['this_smartbook'] and $GLOBALS['smartbook'] == "true") {
            Element::setText($this->form('smartbook')->button_action, 'Обновить');
        }
        if ($GLOBALS['smartbook'] == "true" and $GLOBALS['current_smartbook'] == $GLOBALS['this_smartbook']) {
            Element::setText($this->form('smartbook')->button_action, 'Запустить');
        }
    }

    /**
     * @event image_princess.click-Left
     */
    function doImage_princessClickLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $this->originForm('screen')->content->phys->loadScene('save_the_princess');
        if ($GLOBALS['current_princess'] != $GLOBALS['this_princess'] and $GLOBALS['princess'] == "true") {
            Element::setText($this->form('save_the_princess')->button_action, 'Обновить');
        }
        if ($GLOBALS['princess'] == "true" and $GLOBALS['current_princess'] == $GLOBALS['this_princess']) {
            Element::setText($this->form('save_the_princess')->button_action, 'Запустить');
        }
    }

    /**
     * @event image_monuments.click-Left
     */
    function doImage_monumentsClickLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $this->originForm('screen')->content->phys->loadScene('monuments');
        if ($GLOBALS['current_monuments'] != $GLOBALS['this_monuments'] and $GLOBALS['monuments'] == "true") {
            Element::setText($this->form('monuments')->button_action, 'Обновить');
        }
        if ($GLOBALS['monuments'] == "true" and $GLOBALS['current_monuments'] == $GLOBALS['this_monuments']) {
            Element::setText($this->form('monuments')->button_action, 'Запустить');
        }
    }

    /**
     * @event panel_apps.mouseDrag 
     */
    function doPanel_appsMouseDrag(UXMouseEvent $e = null)
    {    
        
    }

}
