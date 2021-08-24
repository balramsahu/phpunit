<?php
// require 'Calculator.php';
// use PHPUnit\Framework\TestCase;

// class CalculatorTest extends TestCase
// {
//     private $calculator;
 
//     protected function setUp()
//     {
//         $this->calculator = new Calculator();
//     }
 
//     protected function tearDown()
//     {
//         $this->calculator = NULL;
//     }
 
//     public function testAdd()
//     {
//         $result = $this->calculator->add(1, 2);
//         $this->assertEquals(3, $result);
//     }
 
// }
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testEmpty()
    {
        $value = [];
        $this->assertEmpty($value);
        return $value;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $value)
    {
        array_push($value, 'first');
        $this->assertEquals('first', $value[count($value) - 1]);
        $this->assertNotEmpty($value);
        return $value;
    }
}

?>