<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit586b5e8fb7c481b22d054bb4f75bb2fb
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tudublin\\' => 9,
        ),
        'M' => 
        array (
            'Mattsmithdev\\PdoCrudRepo\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tudublin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Mattsmithdev\\PdoCrudRepo\\' => 
        array (
            0 => __DIR__ . '/..' . '/mattsmithdev/pdo-crud-for-free-repositories/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit586b5e8fb7c481b22d054bb4f75bb2fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit586b5e8fb7c481b22d054bb4f75bb2fb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
