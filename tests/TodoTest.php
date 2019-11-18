<?php

namespace khyrie\Todo\Tests;

use khyrie\Todo\Facades\Todo;
use khyrie\Todo\ServiceProvider;
use Orchestra\Testbench\TestCase;

class TodoTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'todo' => Todo::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
