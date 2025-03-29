<?php

namespace advanced_topics;

class DynamicObject
{
    private array $data = [];
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }
    public function __get(string $name):void
    {
        if (array_key_exists($name, $this->data)) {
            echo $this->data[$name];
        }
    }
    public function __isset(string $name): bool
    {
        return array_key_exists($name, $this->data);
    }
    public function __call(string $name, array $arguments): void
    {
        echo "Method $name does not exist";
    }
}
$object = new DynamicObject();
$object->color = "red";
echo $object->color;
echo "\n";
$object->size = 25.5;
echo $object->size;
echo "\n";
echo $object->someUndefinedMethod(1,2,3);
