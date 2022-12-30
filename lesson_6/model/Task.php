<?php

class Task{
   private bool $isDone;
   private string $description;

    /**
     * @param string $description
     */
    public function __construct(string $description, $isDone = false)
    {
        $this->description = $description;
        $this->isDone = $isDone;
    }

    /**
     * @return bool
     */
    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }


    public function markAsDone(): void
    {
        $this->isDone = true;
    }


}