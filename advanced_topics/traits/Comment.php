<?php

namespace advanced_topics\traits;

include_once __DIR__."/Timestampable.php";
class Comment
{
    use Timestampable;
    private string $author;
    private string $message;
    public function __construct(string $author, string $message)
    {
        $this->author = $author;
        $this->message = $message;
    }
}