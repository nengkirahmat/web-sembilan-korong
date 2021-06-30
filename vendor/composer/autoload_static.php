<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit017ae0127f57835b4ad6e647aa5e763f
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chriskacerguis\\RestServer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chriskacerguis\\RestServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit017ae0127f57835b4ad6e647aa5e763f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit017ae0127f57835b4ad6e647aa5e763f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit017ae0127f57835b4ad6e647aa5e763f::$classMap;

        }, null, ClassLoader::class);
    }
}
