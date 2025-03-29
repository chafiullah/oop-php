<?php

namespace polymorphism;
include_once 'Vehicle.php';
class VehicleService
{
    /**
     * @param Vehicle $vehicle
     * @return void
     * Any class that extends the abstract class Vehicle, it's objects can be passed via this function to access the functions of that abstract class. For example, we created two class objects of Car and Bike, both of them extends the abstract class Vehicle.
     */

    public function vehiclesHonkLike(Vehicle $vehicle): void
    {
        echo $vehicle->vehicleHonks()."\n";
    }
}