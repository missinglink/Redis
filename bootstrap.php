<?php

namespace Redis;

use \Doctrine\Common\ClassLoader;

require_once \dirname( __FILE__ ) . \DIRECTORY_SEPARATOR . 'lib' . \DIRECTORY_SEPARATOR . 'Doctrine' . \DIRECTORY_SEPARATOR . 'Common' . \DIRECTORY_SEPARATOR . 'ClassLoader.php';

$classLoader = new ClassLoader( 'Doctrine', \dirname( __FILE__ ) . \DIRECTORY_SEPARATOR . 'lib' );
$classLoader->register();

$classLoader = new ClassLoader( 'Predis', \dirname( __FILE__ ) . \DIRECTORY_SEPARATOR . 'lib' );
$classLoader->register();

$classLoader = new ClassLoader( 'Redis', \dirname( \dirname( __FILE__ ) ) );
$classLoader->register();