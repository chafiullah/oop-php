<?php
declare(strict_types=1);
namespace items;

class Book
{
    private string $title;
    private string $author;
    private int $pages;
    public function __construct(string $title, string $author, int $pages){
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }
    public function getSummary(): string{
        return "The book {$this->title}  by {$this->author} has pages {$this->pages} pages";
    }
}
/**
 * Objects are created in the index.php file to test using files from different directories.
 */