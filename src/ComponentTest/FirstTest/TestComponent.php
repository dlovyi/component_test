<?php
namespace ComponentTest\FirstTest;

class TestComponent
{

    protected $msg = "This is a test component.";

    public function __construct($msg = '')
    {
        if (! empty($msg)) {
            $this->msg = $msg;
        }
    }

    public function test()
    {
        echo $this->msg;
    }
} 