<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9119e55758991ab6962a4e7bcf4c7a12
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Clockwork\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Clockwork\\' => 
        array (
            0 => __DIR__ . '/..' . '/itsgoingd/clockwork/Clockwork',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9119e55758991ab6962a4e7bcf4c7a12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9119e55758991ab6962a4e7bcf4c7a12::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9119e55758991ab6962a4e7bcf4c7a12::$classMap;

        }, null, ClassLoader::class);
    }
}
