<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="player")
 */
class Player {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column()
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $healthPoint = 100;

    /**
     * @ORM\ManyToOne(targetEntity="Weapon")
     */
    private $currentWeapon;

    /**
     * @ORM\OneToMany(targetEntity="PlayerPotion", mappedBy="player", cascade={"persist"})
     */
    protected $playerPotion;

    /**
     * Player constructor.
     */
    public function __construct()
    {
        $this->playerPotion = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getHealthPoint()
    {
        return $this->healthPoint;
    }

    /**
     * @param mixed $healthPoint
     */
    public function setHealthPoint($healthPoint)
    {
        $this->healthPoint = $healthPoint;
    }

    /**
     * @return mixed
     */
    public function getCurrentWeapon()
    {
        return $this->currentWeapon;
    }

    /**
     * @param mixed $currentWeapon
     */
    public function setCurrentWeapon($currentWeapon)
    {
        $this->currentWeapon = $currentWeapon;
    }

    /**
     * @return mixed
     */
    public function getPlayerPotion()
    {
        return $this->playerPotion;
    }

    /**
     * @param mixed $playerPotion
     */
    public function setPlayerPotion($playerPotion)
    {
        $this->playerPotion = $playerPotion;
    }

    public function addPlayerPotion($playerPotion) {
        if($this->playerPotion->contains($playerPotion)){
            return;
        }
        $this->playerPotion->add($playerPotion);
        $playerPotion->setPlayer($this);
    }



}
