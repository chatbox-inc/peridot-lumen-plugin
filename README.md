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

return function(EventEmitterInterface $emitter) {
    \Peridot\Plugin\Lumen\register(require __DIR__ . '/app.php');
};
````

You can use it in your spec as `$this->lumen`

````
    it('GET /string should get string ', function() {
        $this->lumen->get("/string");
        /** @var \Illuminate\Http\Response $response */
        $response = $this->lumen->response;

        assert($response->getStatusCode() === 200);
        assert($response->getOriginalContent() === "hogehoge");
    });
````
