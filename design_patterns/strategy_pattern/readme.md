# The Strategy Pattern
It's pretty complex but dope! If we see the example:
## The [Interface](./DiscountStrategy.php)
It defines discount method which will act based on the object we create. Confused? Let's continue reading.
## The [Strategy Classes](./DiscountStrategies.php)
Here we defined 3 classes: NoDiscountStrategy, PercentDiscountStrategy, FixedDiscountStrategy. Each them have a common method called calculateDiscount(), implemented from our interface. 
## The [DiscountContext](./DiscountContext.php)
Here we have a private property $discountStrategy of type DiscountStrategy. Why?
    This is where the real fun begins. We put the parent as the property so that whenever we pass a child it automatically adopts the properties of the parent. Think it is like this way: you mentioned the coffee will be sweet. Now you can put sugar, fruit syrup, honey to make it sweet. 
How it's working under the hood?
## The [index](./index.php)
- We called the no discount strategy with no constructor parameter because it returns nothing, no discount. But we had to pass the price because price is required by other two functions. You will be clear in the next step.
- In the PercentageStrategy we passed the percentage 0.5, it goes to the class and sets \$strategy to PercentageStrategy in DiscountContext. On the other hand 0.5 is now set as \$percentage inside the PercentDiscountStrategy class.
- Next, when we called getFinalPrice() with the price: what are the two values already set?
- \$strategy = PercentageStrategy
- \$percentage = 0.5
- inside getFinalPrice() we called calculateDiscount($price) which calculates the percentage and finally etFinalPrice() subtracts the discount from the actual price. 
- You might get confused that for FixedDiscountStrategy why we are passing the \$price? It's because it is required by the interface because it is a contract that you have to follow. 