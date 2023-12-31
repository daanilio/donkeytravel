<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8cb91286e88449789cf53c567a85793
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8cb91286e88449789cf53c567a85793::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8cb91286e88449789cf53c567a85793::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8cb91286e88449789cf53c567a85793::$classMap;

        }, null, ClassLoader::class);
    }
}
