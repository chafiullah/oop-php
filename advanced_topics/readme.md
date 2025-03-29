# DynamicObject [ex: DynamicObject.php]
When you create the object and assign some property, it automatically calls the __set property to set the values. This is when the magic method comes into the picture. Previously we noticed phpstorm was whining if call any method directly without properly defining it(i.e: **\$request->name** instead of **\$request->input(name)**. Same goes for the __get and __call. Different magic methods have different purposes, so choose what you have to use. 
# StaticMember
To be honest this funnier than I thought. The static property is pretty cool. In the example you will see the properties and methods are called via objects which is absolutely not recommended. The static properties are class leveled data and should be called via the class name **(StaticClass::staticProperty/Method)**. Why??
This is funny thing. Let's say you created one object \$object_one and changed the value 0 -> 1, and then created another object \$object_two. What value do you think it will return if you read it????
Yes! the last value that you updated. It will not give you a fresh start. So try it with payment systems, you will be instantly kicked out from the company looser. Lol!
# Final
Take it as a relic, where you change nothing further. It is there, use it or leave it. 

## Is [static] that much cool? 
Well it is, and no at the same time. Since php-fpm is single threaded and in each request cycle you have a fresh copy of your script, so you will never run into concurrency issues with php-fpm. However, applications like ReactPHP, RoadRunner which runs a request cycle for a long time can create issues for static properties. You get the idea right? If a request cycle is running for 10 minutes and multiple users are accessing the static property or changing it, well bro pack up your things because you just fucked yourself. 

### Why bother using this shit then?
Well it's pretty useful in helper classes, long calculations for storing data as a cache. It's even more useful in Singleton approaches. You will see in the upcoming lessons. 