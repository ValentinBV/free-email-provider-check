<?php
/*
 * This file is part of free-email-provider-check.
 *
 * (c) Valentin Bondarenko <bvv1988@gmail.com>
 */
use PHPUnit\Framework\TestCase;
use valentinbv\Email\FileSource;

class FileSourceTest extends TestCase
{

    private $source;

    protected function setUp(): void
    {
        $testFile = __DIR__ . '/domains.txt';
        $this->source =  new FileSource($testFile);
    }

    public function testFileExists()
    {
        $this->assertTrue($this->source->fileExists());
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
