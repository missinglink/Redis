<?php

namespace Redis;

include_once \dirname( __FILE__ ) . \DIRECTORY_SEPARATOR . 'bootstrap.php';

class SomethingTest extends \PHPUnit_Framework_TestCase
{
    public function testSomething()
    {
        $r = new TestRecord;
        $r->save();
    }
}