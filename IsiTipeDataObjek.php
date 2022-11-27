<?php

class A 
{
    public string $nama;
    public function sayHello()
    {
        echo "Hello World";
    }
}

class B extends A
{
    public A $a;
    public function __construct()
    {
        $this->a = new A();
    }
}

$b = new B();
var_dump($b->a);