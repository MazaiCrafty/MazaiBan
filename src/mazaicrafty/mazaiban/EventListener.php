<?php

namespace mazaicrafty\mazaiban;

use pocketmine\event\Listener;
use pocketmine\event\PlayerPreLogin;

class EventListener implements Listener{

    public function __construct(Main $main): void{
        $this->main = $main;
    }
}