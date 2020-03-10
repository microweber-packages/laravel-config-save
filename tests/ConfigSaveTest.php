<?php

class ConfigSaveTest extends BaseTest
{
    public function testSimple()
    {

        $save = ConfigSave::set('test','waw');

        ConfigSave::save();

        var_dump($save);
        die();
    }

}