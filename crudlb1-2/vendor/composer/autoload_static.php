<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite550e15e48cae30e7b171c3a0825919c
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite550e15e48cae30e7b171c3a0825919c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
