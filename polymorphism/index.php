<?php
declare(strict_types=1);

namespace polymorphism;

use polymorphism\VehicleService;
include_once(__DIR__ . "/Animal.php");
include_once(__DIR__ . "/Vehicle.php");
//this is also okay if your file is in the same folder.
include_once "VehicleService.php";

/**
 * two classes below will give you the example of polymorphism using Interface
 */
class Dog implements Animal
{
    public function makeSound(): string
    {
        return "Dog makes sound: woof";
    }
}
class Cat implements Animal
{
    public function makeSound(): string
    {
        return "Cat Makes Sound: meow";
    }
}
/**
 * create two different objects from two different class
 */
$dog = new Dog();
$cat = new Cat();
/**
 * example: try makeSound using objects
 */
echo $dog->makeSound();
echo "\n";
echo $cat->makeSound();

/**
 * or you can declare one function that will accept any object that implements the Animal interface. It's outside the class so it's just any normal function. This approach is more professional unless you want to call directly using the objects. This approach makes the codebase more modular.
 */
echo "\n---Using polymorphic call---\n";
function animalMakeSound(Animal $animal): void
{
    echo $animal->makeSound()."\n";
}

animalMakeSound($dog);
animalMakeSound($cat);

/**
 * The same thing can be achieved using abstract class and abstract method. We already discussed the difference in section 2 encapsulation and abstraction. Here we will see the implementation only.
 */
class Car extends Vehicle
{
    public function vehicleHonks(): string
    {
        return "Car honks: pawwwwwww";
    }
}
class Bike extends Vehicle
{
    public function vehicleHonks(): string
    {
        return "Bike honks: peeep";
    }
}

/**
 * create two different objects from two different class
 */
$car = new Car();
$bike = new Bike();
/**
 * example: try vehicleHonks using objects
 */
echo $car->vehicleHonks();
echo "\n";
echo $bike->vehicleHonks();
echo "\n ---Using polymorphic call---\n";
/**
 * for this example we have created a service class VehicleService and moved the polymorphic function inside that. Because declaring a functional globally will lead to duplication.
 */
$vehicleService = new VehicleService();
$vehicleService->vehiclesHonkLike($car);
$vehicleService->vehiclesHonkLike($bike);