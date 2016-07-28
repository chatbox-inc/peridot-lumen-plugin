# Peridot-Lumen-Plugin

Easy to test Lumen Application with Peridot;

## Usage 

install via composer

````
$ composer require --dev chatbox-inc/peridot-lumen-plugin
````

and register in [peridot.php](http://peridot-php.github.io/#plugins) file

````
<?php
use Evenement\EventEmitterInterface;
use Peridot\Plugin\HttpKernel\HttpKernelPlugin;

return function(EventEmitterInterface $emitter) {
    //the second argument expects an HttpKernelInterface or a function that returns one
    HttpKernelPlugin::register($emitter, include __DIR__ . '/app.php');
};
````

