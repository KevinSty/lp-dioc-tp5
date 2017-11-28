<?php
/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 28/11/17
 * Time: 08:41
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="potion")
 */
class Potion {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
     /**
      * @ORM\Column(type="integer")
      */
    private $limite;
    /**
     * @ORM\Column(type="integer")
     */
    private $healthPoint;

    /**
     * @var PlayerPotion
     * @ORM\ManyToOne(targetEntity="PlayerPotion", inversedBy="potion")
     */
    private $playerPotion;

    /**
     * Potion constructor.
     * @param $name
     * @param $limite
     * @param $healthPoint
     */
    public function __construct(string $name, int $limite, int $healthPoint)
    {
        $this->name = $name;
        $this->limit = $limite;
        $this->healthPoint = $healthPoint;
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
    public function getLimite()
    {
        return $this->limite;
    }

    /**
     * @param mixed $limite
     */
    public function setLimit($limite)
    {
        $this->limit = $limite;
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
     * @return PlayerPotion
     */
    public function getPlayerPotion(): PlayerPotion
    {
        return $this->playerPotion;
    }

    /**
     * @param PlayerPotion $playerPotion
     */
    public function setPlayerPotion(PlayerPotion $playerPotion)
    {
        $this->playerPotion = $playerPotion;
    }



}