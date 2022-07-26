<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfbf37d250c7e165d6b0e3eaf35ca1cff
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

        spl_autoload_register(array('ComposerAutoloaderInitfbf37d250c7e165d6b0e3eaf35ca1cff', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfbf37d250c7e165d6b0e3eaf35ca1cff', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitfbf37d250c7e165d6b0e3eaf35ca1cff::getInitializer($loader)();

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitfbf37d250c7e165d6b0e3eaf35ca1cff::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirefbf37d250c7e165d6b0e3eaf35ca1cff($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirefbf37d250c7e165d6b0e3eaf35ca1cff($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
