<?php
namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    public function testRoot()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(),
            $this->response->getContent()
        );
    }

    public function testPing()
    {
        $this->get('/status');

        $this->assertEquals(
            json_encode(['alive' => true]),
            $this->response->getContent()
        );
    }
}
