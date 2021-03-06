<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f13b9055af04253a4c4a09438fcfcf7
{
    public static $files = array (
        'fb151579b5ef997f27ff32261848e7dc' => __DIR__ . '/../..' . '/Config/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TncBzkrt\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TncBzkrt\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f13b9055af04253a4c4a09438fcfcf7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f13b9055af04253a4c4a09438fcfcf7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f13b9055af04253a4c4a09438fcfcf7::$classMap;

        }, null, ClassLoader::class);
    }
}
