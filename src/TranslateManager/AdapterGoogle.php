<?php
/**
 * Created by PhpStorm.
 * User: artemas
 * Date: 1/19/16
 * Time: 11:39 PM
 */

namespace TranslateManager;


use TranslateManager\Adapter\AdapterInterface;

class AdapterGoogle {

    public function translate($text)
    {
        return 'translateGoogle';
    }

}