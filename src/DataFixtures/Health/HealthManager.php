<?php

/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 28/11/17
 * Time: 11:08
 */
class HealthManager {
    private $healthCalculator;
    public function heal(Health $health ){
        $player = $health->player;
        $potion = $health->potion;
        $count = $health->count;
        $playerPotion = null;


        $playerPotion = $this->getPlayerPotion($player, $potion);
        if($playerPotion->getCount() < $count) {
            return;
        }
        for($i=0; $i < $count; $i++) {
            $healthPotion = $this->healthCalculator->calculate($player, $potion);

        }
    }
}