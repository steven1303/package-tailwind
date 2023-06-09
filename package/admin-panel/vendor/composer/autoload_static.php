<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit308d45ad92ed867a3cbc222add8aecf0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Steven1303\\AdminPanel\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Steven1303\\AdminPanel\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit308d45ad92ed867a3cbc222add8aecf0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit308d45ad92ed867a3cbc222add8aecf0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit308d45ad92ed867a3cbc222add8aecf0::$classMap;

        }, null, ClassLoader::class);
    }
}
