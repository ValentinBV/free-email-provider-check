<?php
/*
 * This file is part of free-email-provider-check.
 *
 * (c) Valentin Bondarenko <bvv1988@gmail.com>
 */
use PHPUnit\Framework\TestCase;
use valentinbv\Email\ArraySource;

class ArraySourceTest extends TestCase
{

    private $source;

    protected function setUp(): void
    {
        $testDomainsArray = [
            'example.com',
            'test.com',
        ];
        $this->source =  new ArraySource($testDomainsArray);
    }

    public function testFindIsTrue()
    {
        $this->assertTrue($this->source->find('example.com'));
    }

    public function testFindIsFalse()
    {
        $this->assertFalse($this->source->find('example.org'));
    }
}
