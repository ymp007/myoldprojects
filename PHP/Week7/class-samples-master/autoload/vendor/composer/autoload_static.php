<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6cefd186e248629b030bc9311061e849
{
    public static $classMap = array (
        'Person' => __DIR__ . '/../..' . '/Classes/Order/Person.php',
        'Studenta' => __DIR__ . '/../..' . '/Classes/Studenta.php',
        'Test' => __DIR__ . '/../..' . '/Test/Test.php',
        'Usera' => __DIR__ . '/../..' . '/Classes/Usera.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6cefd186e248629b030bc9311061e849::$classMap;

        }, null, ClassLoader::class);
    }
}
