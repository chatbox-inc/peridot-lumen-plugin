<?php namespace Peridot\Plugin\Lumen;

use Laravel\Lumen\Application;
use Peridot\Runner\Context;

function register(Application $app){
    $scope = new LumenAppScope($app);
    $rootSuite = Context::getInstance()->getCurrentSuite();
    $rootSuite->getScope()->peridotAddChildScope($scope);
}

/**
 * @return LumenAppScope
 */
function lumen(){
    return Context::getInstance()->getCurrentSuite()->getScope()->lumen;
}

