<?php
declare(strict_types = 1);

/**
 * This directive helps you with the naming convention, so that you don't have to write the full namespace everytime you access it as a class. So, yes you have to write both.
 */
use items\Book;
use payment_system\CreditCardPayment;

/**
 * This directive makes the Book.php script executable from this index.php script. Which means all the functionalities of Book.php is now available from index.php. But if you have 10 files in that directory you have to include them exactly the same way 10 times. Tiresome hae! This is why autoloader.php is used. Parser is used inside the autoloader the list all the files in a folder and make them available from any other file in the project.
 *
 */
include_once(__DIR__ . "/items/Book.php");
include_once (__DIR__."/payment_system/CreditCardPayment.php");

/**
 * version 8.3.11
 * Any version less than this will generate error because we have used strict types.
 */
class index {
    private string $name;
    private string $title;
    private int $age;
    public const string UNIVERSITY = 'UniPi'; //generates error for php < 8.3
    public function __construct(string $name, string $title, int $age) {
        $this->name = $name;
        $this->title = $title;
        $this->age = $age;
    }

    public function getToKnowTheAuthor(): string {
        return $this->name.' '.$this->title.' '.$this->age;
    }
}
$shuvo = new index('CHAFIULAH SHUVO','STUDENT', 30);
echo $shuvo->getToKnowTheAuthor();
echo "\nStudies at: ".index::UNIVERSITY;

echo "\n";

$book_one = new Book('Practice OOP','Shuvo',400);
echo $book_one->getSummary();

echo "\n\n\n";
echo "Performing a transaction to buy one copy of the book:\n";
$shop = new CreditCardPayment();
$shop->processPayment(400.00);
$shop->processPayment(9.00);
echo "\n\n\n";