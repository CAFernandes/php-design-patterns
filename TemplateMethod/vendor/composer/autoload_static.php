<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80923baf1bd038c32d17cc908cace0f4
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TemplateMethod\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TemplateMethod\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit80923baf1bd038c32d17cc908cace0f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80923baf1bd038c32d17cc908cace0f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80923baf1bd038c32d17cc908cace0f4::$classMap;

        }, null, ClassLoader::class);
    }
}
