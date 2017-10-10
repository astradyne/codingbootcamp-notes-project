<?php

namespace codingbootcamp\tinymvc;



class request
{
    public static function get($name, $default = null)
    {
        if(isset($_REQUEST[$name]))
        {
          return $_REQUEST[$name];
        }
        else
        {
          return $default;  
        }
    }
}