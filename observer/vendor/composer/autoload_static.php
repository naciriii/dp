<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc8d4d784582d1cd9c88382b0ecc1441
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Naciri\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Naciri\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc8d4d784582d1cd9c88382b0ecc1441::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc8d4d784582d1cd9c88382b0ecc1441::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}