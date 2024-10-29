<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitce59211e3f8bc5ed28f57056eb88342b
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

        spl_autoload_register(array('ComposerAutoloaderInitce59211e3f8bc5ed28f57056eb88342b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitce59211e3f8bc5ed28f57056eb88342b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitce59211e3f8bc5ed28f57056eb88342b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
