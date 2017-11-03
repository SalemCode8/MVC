<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf21c73fe90ed753b46ac9444963af0b6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Seld\\CliPrompt\\' => 15,
        ),
        'L' => 
        array (
            'League\\CLImate\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Seld\\CliPrompt\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/cli-prompt/src',
        ),
        'League\\CLImate\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/climate/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf21c73fe90ed753b46ac9444963af0b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf21c73fe90ed753b46ac9444963af0b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}