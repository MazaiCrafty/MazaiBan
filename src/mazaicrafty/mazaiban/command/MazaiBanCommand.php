<?php

namespace mazaicrafty\mazaiban\command;

use mazaicrafty\mazaiban\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;

class MazaiBanCommand extends Command{

    public function __construct(Main $main){
        $this->main = $main;
        $name = "MazaiBan";
        $description = "This is MazaiBan";
        $usage = "/mban";
        $alias = "mazaiban";
        parent::construct($name, $description, $usage, $alias);
        $permission = "mazaiban.command.mban";
        $this->setPermission($permission);
    }

    public function execute(CommandSender $sender, string $label, array $args): bool{
        switch ($label){
            case "mban":
            $this->getMain()->getBanForm()->createMenu($sender);
            return true;
        }
        return true;
    }
}
