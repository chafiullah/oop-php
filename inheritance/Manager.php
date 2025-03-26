<?php
declare(strict_types=1);
namespace inheritance;
include_once (__DIR__ . "/Employee.php");
class Manager extends Employee
{
    private string $department;
    public function __construct(string $name, float $salary, string $department){
        parent::__construct($name, $salary);
        $this->department = $department;
    }
    public function getDetails():string
    {
        return "Mr/s {$this->name} under the department {$this->department} works here with a salary of \${$this->salary} per month.\n";
    }
}