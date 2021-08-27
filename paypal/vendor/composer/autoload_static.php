<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit041c2322d4b0315e0cca64ad06f02d6f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sample\\' => 7,
        ),
        'P' => 
        array (
            'PaypalPayoutsSDK\\' => 17,
            'PayPalHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sample\\' => 
        array (
            0 => __DIR__ . '/..' . '/paypal/paypal-payouts-sdk/samples',
        ),
        'PaypalPayoutsSDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/paypal/paypal-payouts-sdk/lib/PaypalPayoutsSDK',
        ),
        'PayPalHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/paypal/paypalhttp/lib/PayPalHttp',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit041c2322d4b0315e0cca64ad06f02d6f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit041c2322d4b0315e0cca64ad06f02d6f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit041c2322d4b0315e0cca64ad06f02d6f::$classMap;

        }, null, ClassLoader::class);
    }
}