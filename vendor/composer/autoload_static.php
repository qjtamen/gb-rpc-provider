<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1285843685ba5c4725e4e874a6238b1
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GbService\\Provider\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GbService\\Provider\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1285843685ba5c4725e4e874a6238b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1285843685ba5c4725e4e874a6238b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1285843685ba5c4725e4e874a6238b1::$classMap;

        }, null, ClassLoader::class);
    }
}
