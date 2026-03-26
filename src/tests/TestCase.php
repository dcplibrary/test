<?php

namespace Dcplibrary\Test\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Dcplibrary\Test\App\Providers\TestServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [TestServiceProvider::class];
    }
}
