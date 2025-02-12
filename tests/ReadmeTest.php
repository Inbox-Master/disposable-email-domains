<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use InboxMaster\Disposable\Domains;

class ReadmeTest extends TestCase
{
    public function testCount()
    {
        $domains = \count(Domains::all());
        $readme = file_get_contents(__DIR__ . '/../README.md');
        $this->assertStringContainsString(number_format($domains, 0, '.', ' '), $readme);
    }
}
