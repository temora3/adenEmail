<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd91b694d63033fb370ec5bf6c00d1abc
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

        spl_autoload_register(array('ComposerAutoloaderInitd91b694d63033fb370ec5bf6c00d1abc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd91b694d63033fb370ec5bf6c00d1abc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd91b694d63033fb370ec5bf6c00d1abc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}