<?php
declare (strict_types = 1);
require_once './vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class TestType extends TestCase
{
    public function testPushAndPop()
    {
        $this->assertEquals(echolib\EchoClass::toBool(1), true);
        $i = 1;
        $this->assertEquals($i, 1);
        // echo '>>>>>>>>>'+  echolib\EchoClass::toBool(1);
        // echo '\n';
        
        
    }
}
