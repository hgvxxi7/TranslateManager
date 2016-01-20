<?php
/**
 * Created by PhpStorm.
 * User: artemas
 * Date: 1/19/16
 * Time: 11:00 PM
 */

namespace TranslateManager;


class Manager {

    private  $outAdapter;

    public function setAdapter($inAdapter)
    {
        $this->outAdapter = $inAdapter;  //-> обращение к методу или свойству
    }
    public function translate($text)
    {
        $translate = $this->outAdapter->translate($text);
        return $translate;//this->adapter->translate($text, $language);
    }

}