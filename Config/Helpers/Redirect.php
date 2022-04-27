<?php

namespace TncBzkrt\Config\Helpers;

class Redirect
{

    /**
     * @param string $toUrl
     * @param int $status
     */
    public static function to(string $toUrl, int $status = 301)
    {
        header('Location:' . "challenge/" . $toUrl, true, $status);
        exit;
    }

}