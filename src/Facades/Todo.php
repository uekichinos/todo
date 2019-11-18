<?php

namespace khyrie\Todo\Facades;

use Illuminate\Support\Facades\Facade;

class Todo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'todo';
    }
}
