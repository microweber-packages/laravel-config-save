<?php

class ConfigSaveTest extends BaseTest
{
    public function testSimple()
    {

        $get = Config::get('eho');

        var_dump($get);
        die();
    }

}