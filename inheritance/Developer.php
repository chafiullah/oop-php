<?php
declare(strict_types=1);
namespace inheritance;
include_once (__DIR__ . "/Employee.php");
class Developer extends Employee
{
    private string $programmingLanguage;
    public function __construct(string $name, float $salary, string $programmingLanguage){
        parent::__construct($name, $salary);
        $this->programmingLanguage = $programmingLanguage;
    }
    public function getDetails(): string
    {
        return "Mr/s {$this->name} who codes {$this->programmingLanguage} here with a salary of \${$this->salary} per month.\n";
    }
}