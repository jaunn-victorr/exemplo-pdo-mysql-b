<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76020e31abbbcc9cc8a8cece905db502
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExemploPDOMySql\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExemploPDOMySql\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76020e31abbbcc9cc8a8cece905db502::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76020e31abbbcc9cc8a8cece905db502::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}