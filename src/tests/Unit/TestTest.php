<?php

namespace Dcplibrary\Test\Tests\Unit;

use Dcplibrary\Test\Tests\TestCase;
use Dcplibrary\Test\Test;

class TestTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $instance = new Test();
        $this->assertInstanceOf(Test::class, $instance);
    }

    public function testReturnsCorrectName(): void
    {
        $instance = new Test();
        $this->assertEquals('test', $instance->name());
    }
}
