<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9da0c37f37900c66642388d93d1deecd
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
        'App\\Controllers\\AbstractUser' => __DIR__ . '/../..' . '/app/AbstractUser.php',
        'App\\Controllers\\GetUserController' => __DIR__ . '/../..' . '/app/Controllers/GetUserController.php',
        'App\\TraitSupport' => __DIR__ . '/../..' . '/app/TraitSupport.php',
        'App\\User' => __DIR__ . '/../..' . '/app/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9da0c37f37900c66642388d93d1deecd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9da0c37f37900c66642388d93d1deecd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9da0c37f37900c66642388d93d1deecd::$classMap;

        }, null, ClassLoader::class);
    }
}