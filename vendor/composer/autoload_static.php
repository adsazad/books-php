<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit712cef706d446a17b5157a57567ade5e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cypee\\BooksPhp\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cypee\\BooksPhp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit712cef706d446a17b5157a57567ade5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit712cef706d446a17b5157a57567ade5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit712cef706d446a17b5157a57567ade5e::$classMap;

        }, null, ClassLoader::class);
    }
}
