<?php
namespace MyGreeter;

require 'Client.php';

class MyGreeter_Client_Test extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue($this->greeter->getGreeting());
    }

}

$mycreeter = new MyGreeter_Client_Test();
$mycreeter->setUp();
$mycreeter->test_Instance();
$mycreeter->test_getGreeting();
var_dump($mycreeter);


