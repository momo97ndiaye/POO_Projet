<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42e8d418fead67d230901d2283677063
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Model\\' => 10,
            'App\\Core\\' => 9,
            'App\\Controller\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42e8d418fead67d230901d2283677063::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42e8d418fead67d230901d2283677063::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42e8d418fead67d230901d2283677063::$classMap;

        }, null, ClassLoader::class);
    }
}
