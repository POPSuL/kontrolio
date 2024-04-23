<?php

namespace Kontrolio\Tests\Rules;

use Kontrolio\Rules\CallableRuleWrapper;
use PHPUnit\Framework\TestCase;

class CallableRuleWrapperTest extends TestCase
{
    public function testConstructorThrowsOnValidationAbsence()
    {
        $this->expectException(\UnexpectedValueException::class);
        new CallableRuleWrapper(['name' => 'foo']);
    }
    
    public function testConstructor()
    {
        $rule = new CallableRuleWrapper([
            'name' => 'foo',
            'valid' => true,
            'empty_allowed' => true,
            'skip' => true
        ]);
        
        static::assertEquals('foo', $rule->getName());
        static::assertTrue($rule->isValid());
        static::assertTrue($rule->emptyValueAllowed());
        static::assertTrue($rule->canSkipValidation());
    }
}