<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ed4268d0eaf604b20a75fcd312e1efa
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\EventDispatcher\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/event-dispatcher/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ed4268d0eaf604b20a75fcd312e1efa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ed4268d0eaf604b20a75fcd312e1efa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ed4268d0eaf604b20a75fcd312e1efa::$classMap;

        }, null, ClassLoader::class);
    }
}
