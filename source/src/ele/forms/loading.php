<?php
namespace ele\forms;

use std, gui, framework, ele;
use action\Animation; 

class loading extends AbstractForm
{
    /**
     * @event progress_indicator.destroy 
     */
    function doProgress_indicatorDestroy(UXEvent $e = null)
    {
        $e = $event ?: $e;
        $internet_connection = file_get_contents('http://ya.ru') !== false;
        $GLOBALS['internet_connection'] = 'true';
        if (!$internet_connection) {
            $GLOBALS['internet_connection'] = 'false';
            $this->originForm('screen')->content->phys->loadScene('error');
            Element::setText($this->form('error')->lbl_name_error, 'Хьюстон, у нас проблемы!');
            Element::setText($this->form('error')->lbl_content_error, 'Подключение к интернету отсутствует.');
            Animation::fadeIn($this->form('error')->img_internet_problems, 250, function () use ($e, $event) {});
            return;
        }
        if ($GLOBALS['current_version'] != $GLOBALS['this_version']) {
            $this->originForm('screen')->content->phys->loadScene('error');
            Element::setText($this->form('error')->lbl_name_error, $GLOBALS['header_error']);
            Element::setText($this->form('error')->lbl_content_error, $GLOBALS['content_error']);
            Element::loadContentAsync($this->form('error')->img_error, 'https://ele.ucoz.net/image_error.png', function () use ($e, $event) {});
        }
        if ($GLOBALS['current_version'] == $GLOBALS['this_version']) {
            $this->originForm('screen')->content->phys->loadScene('scroll_bar');
        }
    }
}