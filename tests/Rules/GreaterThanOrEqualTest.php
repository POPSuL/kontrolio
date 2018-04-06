<?php

namespace Kontrolio\Tests\Rules;

use Kontrolio\Rules\Core\GreaterThanOrEqual;
use PHPUnit\Framework\TestCase;

class GreaterThanOrEqualTest extends TestCase
{
    public function testValidation()
    {
        $this->assertTrue((new GreaterThanOrEqual(5))->isValid(5));
        $this->assertTrue((new GreaterThanOrEqual(5))->isValid(6));
        $this->assertFalse((new GreaterThanOrEqual(5))->isValid(4));
        $this->assertTrue((new GreaterThanOrEqual('a'))->isValid('a'));
        $this->assertTrue((new GreaterThanOrEqual('a'))->isValid('b'));
        $this->assertFalse((new GreaterThanOrEqual('c'))->isValid('a'));
    }
}