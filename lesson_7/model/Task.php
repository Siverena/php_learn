<?php

class Task{
    private ?int $id = null;
    private  $isDone = false;
    private  ?string $description;

    /**
     * @param string $description
     */
    public function __construct(?string $description = null)
    {
        if(!is_null($description)) {
            $this->description = $description;
        }
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

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function markAsDone(): void
    {
        $this->isDone = true;
    }


}