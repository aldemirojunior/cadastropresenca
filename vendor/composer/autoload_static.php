<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteaedbaaa6919e8e7b4da9b276ee1c795
{
    public static $prefixLengthsPsr4 = array (
        5 => 
        array (
            '5511934424010\\Cadastrodepresenca\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '5511934424010\\Cadastrodepresenca\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteaedbaaa6919e8e7b4da9b276ee1c795::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteaedbaaa6919e8e7b4da9b276ee1c795::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteaedbaaa6919e8e7b4da9b276ee1c795::$classMap;

        }, null, ClassLoader::class);
    }
}
