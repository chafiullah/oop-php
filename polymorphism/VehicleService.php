<?php

namespace polymorphism;
include_once 'Vehicle.php';
class VehicleService
{
    public function vehiclesHonkLike(Vehicle $vehicle): void
    {
        echo $vehicle->vehicleHonks()."\n";
    }
}