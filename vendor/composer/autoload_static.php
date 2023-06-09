<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3980e6b5d3b3491ec20a8937e01df623
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nawa\\Task\\' => 10,
        ),
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nawa\\Task\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/task1',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3980e6b5d3b3491ec20a8937e01df623::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3980e6b5d3b3491ec20a8937e01df623::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3980e6b5d3b3491ec20a8937e01df623::$classMap;

        }, null, ClassLoader::class);
    }
}
