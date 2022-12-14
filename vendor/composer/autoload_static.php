<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1b0555ce1eb5a39d05099eb0a13d922
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'scifishop\\' => 10,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'scifishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/scifishop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1b0555ce1eb5a39d05099eb0a13d922::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1b0555ce1eb5a39d05099eb0a13d922::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc1b0555ce1eb5a39d05099eb0a13d922::$classMap;

        }, null, ClassLoader::class);
    }
}
