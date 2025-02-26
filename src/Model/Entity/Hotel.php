<?php
namespace Tobi\WebtCoreViewsInMvc\Model\Entity;
class Hotel{
    public function __construct(protected int $id, protected String $name, protected int $stars, protected String $description)
    {
    }
    public function getName(){
        return $this->name;
    }

    public function getStars(){
        return $this->stars;
    }

    public function getDescription(){
        return $this->description;
    }
}