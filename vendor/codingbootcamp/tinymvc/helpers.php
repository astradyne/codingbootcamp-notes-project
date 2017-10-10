<?php
//alias for \codingbootcamp\tinymvc\request::get

function request($name, $method = null)
{
    return \codingbootcamp\tinymvc\request::get($name, $default);
}