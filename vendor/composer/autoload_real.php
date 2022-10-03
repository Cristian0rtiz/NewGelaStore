<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8056dd4cfaea6778faa7a7037321dd9c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit8056dd4cfaea6778faa7a7037321dd9c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8056dd4cfaea6778faa7a7037321dd9c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8056dd4cfaea6778faa7a7037321dd9c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
