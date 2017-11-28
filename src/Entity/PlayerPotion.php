<?php
/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 28/11/17
 * Time: 10:16
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="player_potion")
 */
class PlayerPotion {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="integer")
     */
    private $count;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="player_potion")
     */
    private $player;
    /**
     * @ORM\ManyToOne(targetEntity="Potion")
     */
    protected $potion;

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
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param mixed $player
     */
    public function setPlayer($player)
    {
        $this->player = $player;
    }

    /**
     * @return mixed
     */
    public function getPotion()
    {
        return $this->potion;
    }

    /**
     * @param mixed $potion
     */
    public function setPotion($potion)
    {
        $this->potion = $potion;
    }

}