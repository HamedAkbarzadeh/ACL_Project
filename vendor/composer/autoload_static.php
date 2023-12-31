<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita79fad5270a509d461bf2819c8cb11c4
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita79fad5270a509d461bf2819c8cb11c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita79fad5270a509d461bf2819c8cb11c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita79fad5270a509d461bf2819c8cb11c4::$classMap;

        }, null, ClassLoader::class);
    }
}
