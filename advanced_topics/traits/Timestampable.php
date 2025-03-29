<?php
declare(strict_types=1);
namespace advanced_topics\traits;
use DateTime;

trait Timestampable
{
    private DateTime $createdAt;
    private DateTime $updatedAt;
    public function initializeTimestamps(): void
    {
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }
    public function updateTimestamp(): DateTime
    {
        return $this->updatedAt = new DateTime();
    }
    public function displayTimestamps(): void
    {
        echo $this->createdAt->format('Y-m-d H:i:s') .' - '. $this->updatedAt->format('Y-m-d H:i:s')."\n";
    }
}
