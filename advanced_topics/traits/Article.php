<?php
declare(strict_types=1);
namespace advanced_topics\traits;

include_once __DIR__ . "/Timestampable.php";
class Article
{
    use Timestampable;
    private string $title;
    private string $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
}