<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbcbb28f9fb3a6270c1b48b2da4f11f11
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TexLab\\MyDB\\' => 12,
        ),
        'S' => 
        array (
            'Services\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TexLab\\MyDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/texlab/mydb/src',
        ),
        'Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/services',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbcbb28f9fb3a6270c1b48b2da4f11f11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbcbb28f9fb3a6270c1b48b2da4f11f11::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
