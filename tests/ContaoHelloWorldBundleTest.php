<?php

namespace lennmueller\ContaoHelloWorlddBundle\Tests;

use lennmueller\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('lennmueller\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}