<?php
declare(strict_types=1);
namespace inheritance;

class Employee
{
    protected string $name;
    protected float $salary;

    public function __construct(string $name, float $salary){
        $this->name = $name;
        $this->salary = $salary;
    }
    public  function getDetails():string
    {
        return "Mr/s {$this->name} works here with a salary of \${$this->salary} per month.\n";
    }
}