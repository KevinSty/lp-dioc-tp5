<?php

/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 28/11/17
 * Time: 11:17
 */
class CalculatePotion {
    public function calculate(Player $player, Potion $potion) {
        $healthPoint = $player->getHealthPoint();

        if($healthPoint > $potion->getLimite()) {
            return null;
        }

        if($healthPoint + $potion->getLimite()) {
            return null;
        }
    }
}