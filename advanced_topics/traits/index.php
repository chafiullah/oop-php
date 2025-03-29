<?php
declare(strict_types=1);
namespace advanced_topics\traits;

include_once __DIR__ . "/Article.php";
include_once __DIR__ . "/Comment.php";

$article = new Article('Blockchain', 'The article about blockchain.');
$comment = new Comment('Chafiullah','Bad article');

$article->initializeTimestamps();
$article->displayTimestamps();
sleep(2);
$article->updateTimestamp();
$article->displayTimestamps();

echo "Generating comments...........\n";
sleep(10);
$comment->initializeTimestamps();
$comment->displayTimestamps();
sleep(2);
$comment->updateTimestamp();
$comment->displayTimestamps();