<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78f1873ca766a7463830567f9313398a
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'H' => 
        array (
            'Http\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Http',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78f1873ca766a7463830567f9313398a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78f1873ca766a7463830567f9313398a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78f1873ca766a7463830567f9313398a::$classMap;

        }, null, ClassLoader::class);
    }
}
