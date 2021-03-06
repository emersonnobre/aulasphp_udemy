<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e1b3acbc7920e088a6854acccdf4494
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit6e1b3acbc7920e088a6854acccdf4494::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6e1b3acbc7920e088a6854acccdf4494::$classMap;

        }, null, ClassLoader::class);
    }
}
