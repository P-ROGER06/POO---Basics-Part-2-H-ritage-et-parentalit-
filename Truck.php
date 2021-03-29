<?php

require_once 'Vehicle.php';


class Truck extends Vehicle
{

    private int $storage;

    private int $cargo;

    public function __construct(string $color, int $nbSeats, int $storage)

    {

        parent::__construct($color, $nbSeats);

        $this->setStorage($storage);
    }

    public function getStorage(): int

    {

        return $this->storage;
    }


    public function setStorage(int $storage): void

    {

            $this->storage = $storage;
       
    }


    public function cargo(): string

    {
        if($this->storage <= 79) {
        

        $result = "in filling ";

        } else {

            $result = "full";

        }

        return $result;
    }

    
}
