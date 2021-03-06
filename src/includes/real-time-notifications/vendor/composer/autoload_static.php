<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit752b47863d037d39c98216f20dc659ac
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pusher\\' => 7,
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pusher\\' => 
        array (
            0 => __DIR__ . '/..' . '/pusher/pusher-php-server/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit752b47863d037d39c98216f20dc659ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit752b47863d037d39c98216f20dc659ac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
