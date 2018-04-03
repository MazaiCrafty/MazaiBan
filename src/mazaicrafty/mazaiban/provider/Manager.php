<?php

namespace mazaicrafty\mazaiban\provider;

use mazaicrafty\mazaiban\Main;

class Manager{

    /**
     * @var Main
     */
    private $main;

     /**
      * @param Main $main
      */
    public function __construct(Main $main){
        $this->main = $main;
        @mkdir($this->getMain()->getDataFolder());
        $this->getMain()->saveResource("forever.yml");
        $this->getMain()->saveResource("timelimit.yml");
        $this->forever = new Config($this->getMain()->getDataFolder() . "manager.yml", Config::YAML);
        $this->timeLimit = new Config($this->getMain()->getDataFolder() . "timelimit.yml", Config::YAML);
    }

    public function addForever(string $name, string $reason){
    }

    /**
     * @return Main
     */
    public function getMain(): Main{
        return $this->main;
    }

}