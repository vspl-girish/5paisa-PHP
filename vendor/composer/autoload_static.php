<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit600cfa1e02536b21d9adef7909f133eb
{
    public static $files = array (
        'e8aa6e4b5a1db2f56ae794f1505391a8' => __DIR__ . '/..' . '/amphp/amp/lib/functions.php',
        '76cd0796156622033397994f25b0d8fc' => __DIR__ . '/..' . '/amphp/amp/lib/Internal/functions.php',
        '6cd5651c4fef5ed6b63e8d8b8ffbf3cc' => __DIR__ . '/..' . '/amphp/byte-stream/lib/functions.php',
        'bcb7d4fc55f4b1a7e10f5806723e9892' => __DIR__ . '/..' . '/amphp/sync/src/functions.php',
        'e187e371b30897d6dc51cac6a8c94ff6' => __DIR__ . '/..' . '/amphp/sync/src/ConcurrentIterator/functions.php',
        '8dc56fe697ca93c4b40d876df1c94584' => __DIR__ . '/..' . '/amphp/process/lib/functions.php',
        '3da389f428d8ee50333e4391c3f45046' => __DIR__ . '/..' . '/amphp/serialization/src/functions.php',
        '445532134d762b3cbc25500cac266092' => __DIR__ . '/..' . '/daverandom/libdns/src/functions.php',
        '7ebf029ad4b246f1e3f66192b40a932f' => __DIR__ . '/..' . '/amphp/dns/lib/functions.php',
        'e1e8b49c332434256b5df11b0f0c2a62' => __DIR__ . '/..' . '/league/uri-parser/src/functions_include.php',
        'd4e415514e4352172d58f02433fa50e4' => __DIR__ . '/..' . '/amphp/socket/src/functions.php',
        '1c2dcb9d6851a7abaae89f9586ddd460' => __DIR__ . '/..' . '/amphp/socket/src/Internal/functions.php',
        '3d8ee50db78074a9235f0c2008c26b42' => __DIR__ . '/..' . '/amphp/http/src/functions.php',
        '77e5a577434e31d19d8dd6aeceac1ff4' => __DIR__ . '/..' . '/amphp/http-client/src/Internal/functions.php',
        '3d05d4f147c95ba663000bd908d45656' => __DIR__ . '/..' . '/amphp/websocket/src/functions.php',
        '4be4fbd9f5a89207b1fd1c85ae339dd7' => __DIR__ . '/..' . '/amphp/websocket-client/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'LibDNS\\' => 7,
            'League\\Uri\\' => 11,
        ),
        'K' => 
        array (
            'Kelunik\\Certificate\\' => 20,
        ),
        'A' => 
        array (
            'Amp\\WindowsRegistry\\' => 20,
            'Amp\\Websocket\\Client\\' => 21,
            'Amp\\Websocket\\' => 14,
            'Amp\\Sync\\' => 9,
            'Amp\\Socket\\' => 11,
            'Amp\\Serialization\\' => 18,
            'Amp\\Process\\' => 12,
            'Amp\\Parser\\' => 11,
            'Amp\\Http\\Client\\' => 16,
            'Amp\\Http\\' => 9,
            'Amp\\Dns\\' => 8,
            'Amp\\Cache\\' => 10,
            'Amp\\ByteStream\\' => 15,
            'Amp\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'LibDNS\\' => 
        array (
            0 => __DIR__ . '/..' . '/daverandom/libdns/src',
        ),
        'League\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/uri/src',
            1 => __DIR__ . '/..' . '/league/uri-interfaces/src',
            2 => __DIR__ . '/..' . '/league/uri-parser/src',
        ),
        'Kelunik\\Certificate\\' => 
        array (
            0 => __DIR__ . '/..' . '/kelunik/certificate/lib',
        ),
        'Amp\\WindowsRegistry\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/windows-registry/lib',
        ),
        'Amp\\Websocket\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/websocket-client/src',
        ),
        'Amp\\Websocket\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/websocket/src',
        ),
        'Amp\\Sync\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/sync/src',
        ),
        'Amp\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/socket/src',
        ),
        'Amp\\Serialization\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/serialization/src',
        ),
        'Amp\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/process/lib',
        ),
        'Amp\\Parser\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/parser/lib',
        ),
        'Amp\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/http-client/src',
        ),
        'Amp\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/hpack/src',
            1 => __DIR__ . '/..' . '/amphp/http/src',
        ),
        'Amp\\Dns\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/dns/lib',
        ),
        'Amp\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/cache/lib',
        ),
        'Amp\\ByteStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/byte-stream/lib',
        ),
        'Amp\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/amp/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cash' => 
            array (
                0 => __DIR__ . '/..' . '/cash/lrucache/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit600cfa1e02536b21d9adef7909f133eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit600cfa1e02536b21d9adef7909f133eb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit600cfa1e02536b21d9adef7909f133eb::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit600cfa1e02536b21d9adef7909f133eb::$classMap;

        }, null, ClassLoader::class);
    }
}
