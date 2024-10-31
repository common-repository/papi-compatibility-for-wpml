<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43e9ba18ad5c70c39d6210e3e5026167
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'logoscon\\PapiWpml\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'logoscon\\PapiWpml\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $classMap = array (
        'logoscon\\PapiWpml\\Admin' => __DIR__ . '/../..' . '/lib/Admin.php',
        'logoscon\\PapiWpml\\I18n' => __DIR__ . '/../..' . '/lib/I18n.php',
        'logoscon\\PapiWpml\\Plugin' => __DIR__ . '/../..' . '/lib/Plugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit43e9ba18ad5c70c39d6210e3e5026167::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43e9ba18ad5c70c39d6210e3e5026167::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit43e9ba18ad5c70c39d6210e3e5026167::$classMap;

        }, null, ClassLoader::class);
    }
}