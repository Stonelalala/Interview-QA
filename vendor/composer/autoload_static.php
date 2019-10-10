<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13260b39de3780a06cf682da5efec53a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MySQL\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MySQL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/MySQL',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13260b39de3780a06cf682da5efec53a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13260b39de3780a06cf682da5efec53a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
