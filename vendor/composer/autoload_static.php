<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b81be7d1398a568880b3c77bca71bfa
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b81be7d1398a568880b3c77bca71bfa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b81be7d1398a568880b3c77bca71bfa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b81be7d1398a568880b3c77bca71bfa::$classMap;

        }, null, ClassLoader::class);
    }
}
