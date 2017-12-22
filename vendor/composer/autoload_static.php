<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit923a1562ac4efd44c675ec06cd34e874
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User_app\\' => 9,
        ),
        'F' => 
        array (
            'Factory_app\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User_app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/user',
        ),
        'Factory_app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/factory',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit923a1562ac4efd44c675ec06cd34e874::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit923a1562ac4efd44c675ec06cd34e874::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit923a1562ac4efd44c675ec06cd34e874::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
