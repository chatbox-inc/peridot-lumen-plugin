<?php
use Evenement\EventEmitter;


describe('Application', function() {
    beforeEach(function() {

    });

    it('GET /string should get string ', function() {
        $this->lumen->get("/string");
        /** @var \Illuminate\Http\Response $response */
        $response = $this->lumen->response;

        assert($response->getStatusCode() === 200);
        assert($response->getOriginalContent() === "hogehoge");
    });

    it('GET /array should get array', function() {
        $this->lumen->get("/array");
        /** @var \Illuminate\Http\Response $response */
        $response = $this->lumen->response;

        assert($response->getStatusCode() === 200);
        assert($response->getOriginalContent() === ["apple","lemon","banana"]);
    });
    it('should get 404 ', function() {
        $this->lumen->get("/hogehoge");
        /** @var \Illuminate\Http\Response $response */
        $response = $this->lumen->response;

        assert($response->getStatusCode() === 404);
    });
});
