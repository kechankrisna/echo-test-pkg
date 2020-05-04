<?php
// namespace TestType;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

// function assertTrueOrFalse($actual, $expected, $message = "")
// {
//     if ($actual != $expected) {
//         if ($message != null) {
//             echo $message;
//             return;
//         }
//         echo "actual = $actual\n";
//         echo "expected  = $expected \n";
//         return;
//     } else {
//         echo "Done!\n";
//     }
// }

// class TryTest extends TestCase
// {
//     public  function testMethod()
//     {
//         $this->assertSame(EchoClass::toBool(1), false);
//     }
// }
// $i = 1;
// assertTrueOrFalse(++$i, 2);

class TestType extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        // $this->assertInstanceOf(
        //     Email::class,
        //     Email::fromString('user@example.com')
        // );
        $i = 1;
        $this->assertEquals(++$i, 22);
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        // $this->expectException(InvalidArgumentException::class);

        // Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        // $this->assertEquals(
        //     'user@example.com',
        //     Email::fromString('user@example.com')
        // );
    }
}
