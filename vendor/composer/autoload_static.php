<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80971b637e3c61340b10f365c9982008
{
    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'jetsetphp\\' => 10,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'jetsetphp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80971b637e3c61340b10f365c9982008::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80971b637e3c61340b10f365c9982008::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
