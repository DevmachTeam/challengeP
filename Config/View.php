<?php

namespace TncBzkrt\Config;

use function Composer\Autoload\includeFile;

class View
{

    /**
     * @param string $View
     * @param array $Data
     * @return string
     */
    public static function show(string $View, array $Data = []): string
    {
        $ViewFile="";
        $ViewPath = dirname(__DIR__) . '/Public/views/' .$View;
        $ViewData=extract($Data);
        $ViewFile===include($ViewPath);
        return $ViewFile;
    }

}