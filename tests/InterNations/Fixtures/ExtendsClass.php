<?php
namespace InterNations\Component\TypePolice\Tests\Fixtures;

abstract class AbstractBaseClass
{
    public function baseMethod()
    {
        return __FUNCTION__;
    }

    abstract public function abstractBaseMethod();

    public static function staticBaseMethod()
    {
        return __FUNCTION__;
    }

    private static function privateStaticBaseMethod()
    {
        return __FUNCTION__;
    }
}

class ExtendsClass extends AbstractBaseClass
{
    public function extendedMethod()
    {
        return __FUNCTION__;
    }

    public function abstractBaseMethod()
    {
        return __FUNCTION__;
    }

    public function __call($method, array $arguments)
    {
    }

    public function __get($property)
    {
    }

    public function __set($property, $value)
    {
    }
}
