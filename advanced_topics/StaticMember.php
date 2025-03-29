<?php

namespace advanced_topics;

class StaticMember
{
    private static int $count = 0;
    public static function increment():void
    {
        self::$count++;
    }
    public static function getCount():int
    {
        return self::$count;
    }
}

/**
 * It's recommended to call the properties/methods like:
 * StaticMember::increment();
 * StaticMember::getCount();
 *
 * The example below is not recommended to call via objects but just to show you the operation behind.
 */

$object = new StaticMember();
$object->increment();
echo $object->getCount()."\n";
$object->increment();
echo $object->getCount()."\n";
$object->increment();
echo $object->getCount()."\n";

/**
 * No matter how many objects you create, the property is class leveled and static, and you are going to get the last value changed/updated by other objects or the class itself.
 */
$object_two = new StaticMember();
echo $object_two->getCount()."\n";