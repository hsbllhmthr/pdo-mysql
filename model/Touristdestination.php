<?php

class Touristdestination{
    private ?int $id;
    private string $name;
    private string $address;
    private string $city;
    private string $destinationtype;
    private ?string $country;
    
    function __construct(?int $id, string $name, string $address, string $city, string $destinationtype, ?string $country) {
    	$this->id = $id;
    	$this->name = $name;
        $this->address = $address;
        $this->city = $city;
        $this->destinationtype = $destinationtype;
    	$this->country = $country;
    	
      
    }

    /**
    * @return int
    */
    public function getId(): ?int {
    	return $this->id;
    }

    /**
    * @return string
    */
    public function getName(): string {
    	return $this->name;
    }

    /**
    * @return string
    */
    public function getAddress(): string {
    	return $this->address;
    }

    /**
    * @return string
    */
    public function getCity(): string {
    	return $this->city;
    }

    /**
    * @return string
    */
    public function getDestinationType(): string {
    	return $this->destinationtype;
    }

    /**
    * @return string
    */
    public function getCountry(): ?string {
    	return $this->country;
    }

    /**
    * @return string
    */
    public function __toString(): string {
    	return "Id: {$this->id}, Name: {$this->name}, Address:{$this->address}, City:{$this->city}, Type: {$this->destinationtype}, Country: {$this->country}";
    }
}
?>