<?php
namespace Bernh\WebtCoreViewsInMvc\Model\Entity;
class Hotel{
    public function __construct(protected int $id, protected String $name, protected int $stars, protected String $description)
    {
        if($stars > 5){
            $this->stars = 5;
        }else if($stars < 0){
            $this->stars = 0;
        }
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
    public function getId(){
        return $this->id;
    }
    public function getHTML(){
        $class = "div".$this->getId()%3;
        $stars = str_repeat("⭐",$this->getStars()).str_repeat("☆",5-$this->getStars());
        return <<<Template
            <div class='$class'>
                <h3>{$this->getName()}</h3>
                <div>
                    <h5>{$stars}</h5>
                    <p>{$this->getDescription()}</p>
                </div>
            </div>
        Template;
    }
}