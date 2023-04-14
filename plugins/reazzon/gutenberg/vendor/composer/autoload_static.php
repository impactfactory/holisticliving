<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1745f0cb68b1bd8b511a09373b0a8dcc
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReaZzon\\Gutenberg\\' => 18,
        ),
        'E' => 
        array (
            'Embed\\' => 6,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReaZzon\\Gutenberg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Embed\\' => 
        array (
            0 => __DIR__ . '/..' . '/embed/embed/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1745f0cb68b1bd8b511a09373b0a8dcc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1745f0cb68b1bd8b511a09373b0a8dcc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
