<?php
namespace Peridot\Plugin\Lumen;

use Illuminate\Http\Response;
use Laravel\Lumen\Application;
use Peridot\Core\Scope;
use Laravel\Lumen\Testing\Concerns\MakesHttpRequests;

class LumenAppScope extends Scope
{
    use MakesHttpRequests;

    protected $app;

    protected $baseUrl = 'http://localhost';

    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->lumen = $this;
    }

    /**
     * @return Response
     */
    public function response(){
        return $this->response;
    }
}
