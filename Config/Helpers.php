<?php

use TncBzkrt\Config\Database;

/**
 * @param string $name
 * @param array $params
 * @return string
 */
function route(string $name, array $params = [])
{
    return \TncBzkrt\Config\Route::url($name, $params);
}

/**
 * @param string $name
 * @param array $data
 * @return string
 */
function view(string $name, array $data = []): string
{
    return \TncBzkrt\Config\View::show($name, $data);
}

/**
 * @param string $name
 * @param array $params
 * @return string
 */
function url(string $name, array $params = []): string
{
    return \TncBzkrt\Config\Route::url($name, $params);
}

/**
 * @param string $name
 * @return mixed
 */
function model(string $name){

    $name = '\TncBzkrt\App\Model\\' . $name;
    return new $name();
}



function validation(){
    return new \TncBzkrt\Config\Validation();
}


function BaseUrl(){
    $url="http://localhost/challenge";
    return $url;
}

