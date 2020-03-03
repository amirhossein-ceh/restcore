<?php namespace Core;

abstract class Controller
{
    public function before()
    {
//        echo "before <br>";
        return true;
    }

    public function after()
    {
//        echo "<br> after";
    }
}