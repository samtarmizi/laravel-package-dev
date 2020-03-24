<?php

namespace Samtarmizi\Greeting;

class Greeting
{
    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}