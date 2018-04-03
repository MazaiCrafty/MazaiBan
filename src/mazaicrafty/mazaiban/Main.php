<?php

/*
 * ___  ___               _ _____            __ _
 * |  \/  |              (_)  __ \          / _| |
 * | .  . | __ _ ______ _ _| /  \/_ __ __ _| |_| |_ _   _
 * | |\/| |/ _` |_  / _` | | |   | '__/ _` |  _| __| | | |
 * | |  | | (_| |/ / (_| | | \__/\ | | (_| | | | |_| |_| |
 * \_|  |_/\__,_/___\__,_|_|\____/_|  \__,_|_|  \__|\__, |
 *                                                   __/ |
 *                                                  |___/
 * Copyright (C) 2017-2018 @MazaiCrafty (https://twitter.com/MazaiCrafty)
 *
 * This program is free plugin.
 */

namespace mazaicrafty\mazaiban;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use jojoe77777\FormAPI\FormAPI;
use mazaicrafty\mazaiban\EventListener;
use mazaicrafty\mazaiban\provider\Manager;
use mazaicrafty\mazaiban\command\MazaiBanCommand;

class Main extends PluginBase{

    /**
     * @var FormAPI
     */
    private $formAPI;

    /**
     * @var Provider
     */
    private $provider;

    /**
     * @var EventListener
     */
    private $listener;

    /**
     * @var ForeverBan
     */
    private $forever;

    public function onEnable(): void{
        self::loadAPI();
        self::loadClass();
    }

    public function loadClass(): void{
        $this->listener = new EventListener($this);
    }

    public function loadAPI(): void{
        $this->formAPI = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
    }

    /**
     * @return Main
     */
    public function getMain(): Main{
        return $this;
    }

    /**
     * @return EventListener
     */
    public function getListener(): EventListener{
        return $this->listener;
    }

    /**
     * @return FormAPI
     */
    public function getForm(): FormAPI{
        return $this->formAPI;
    }

    /**
     * @return Provider
     */
    public function getProvider(): Provider{
        return $this->provider;
    }

}
