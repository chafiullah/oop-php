# Practice Session 1
In this session we will practice basic Classes and Objects. If there is anything in the code that is logical and needs to be remembered will be explained here.

## Public Visibility
Any time from anywhere. So, clearly it's a bad choice to make attributes public unless they are constant, the methods will be public through which you can safely manipulate data. We don't have any example of a public class in this project.

## Private Visibility
Which is only accessible from the class within. In index.php file we have the Author class, if you try something outside the class Author::age = 30; it will certainly generate an error. On the other hand we have a constant UNIVERSITY which has been accessed outside the class Author::UNIVERSITY. You can only read the data since it's constant. The IDE will suggest to put **string** before that, but it will generate syntax error(for php < 8.3). Because in PHP even for declared types you cannot define any data type before constants (until 8.3). 

## Exercise 1
Created a new class Book in a different directory and operated from index.php. If you notice inside index.php we have used both **include_once()** and **use**, read the comments to know more.

## Exercise 2 [interfaces, abstract classes, abstract method, constants]
Interfaces are sketches/contracts what you must have if you implement that interface. Where abstract classes are blue-prints that can be extended by the class which wants to have the same blue-prints.
- similarity between interface and abstract class is the methods of interface and abstract methods of abstract class. Both of these methods are defined without a body/implementation(but after php 8.1 they have introduced default implementations). If your class uses one of these procedure, you will be forced to implement the methods defined in the interface/abstract class. 
- the only dissimilarity is that in abstract classes you can also have properties and concrete methods(public methods) with bodies and proper implementations.

## Exercise 3 [Inheritance]
What we get to learn from here is:
- even in the same namespace, you have to include the external files you are using
- inside the " $this->variable " you can write the variable without {}.
- PHP natively does not support functional **overloading** like c++ or java, but you can use the (...) operator. Well this is not the advanced practice right now.

## Exercise 4 [Polymorphism]
We have already seen the implementation of abstraction and interface in exercise 2. Interface is an actual example of polymorphism. In this example we have seen how we can create a polymorphic function and use it with different objects. We also modularized the code creating a VehicleService class, so that we don't need to declare the function globally which will lead to duplication. 
# Design Patterns
## Singleton example: [DatabaseConnection](./design_patterns/DatabaseConnection.php)
Here in this example you will see a clear example of static property. The connection is made private so that only from the class an instance is created, it's made static so that all other classes share the exact same instances. \_\_clone() prevents from the instance to be duplicated. \_\_wakeup() lets you restore the state after deserialization.
## Serialization?
Just a reminder: it converts objects into string and vise versa. But you must never serialize properties such as database connections. \_\_wakeup() comes to the picture in such cases. After deserialization all your properties will be converted back to objects but what happens to the database connection? Yes, \_\_wakeup() will re-initialize it. 
## Dependency Injection [directory](./design_patterns/dependency_injection)