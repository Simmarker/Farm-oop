<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b7b075d7327303adf702a05769232e2
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Farm\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Farm\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b7b075d7327303adf702a05769232e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b7b075d7327303adf702a05769232e2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b7b075d7327303adf702a05769232e2::$classMap;

        }, null, ClassLoader::class);
    }
}
