<?php
/**
 * Created by PhpStorm.
 * User: artemas
 * Date: 1/19/16
 * Time: 11:31 PM
 */

namespace TranslateManager\Adapter;


interface AdapterInterface {
    function translate($text, $language);


}