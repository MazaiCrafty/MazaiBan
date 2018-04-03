<?php

namespace mazaicrafty\mazaiban\form;

use mazaicrafty\mazaiban\Main;
use pocketmine\Player;

class BanForm{

    const CLOSE_BUTTON = 0;
    const FOREVER_BUTTON = 1;
    const TIME_LIMIT_BUTTON = 2;
    const ABOUT = 3;

    /**
     * @var Main
     */
    private $main;

     /**
      * @param Main $main
      */
    public function __construct(Main $main){
        $this->main = $main;
    }

    /**
     * @param Player $player
     */
    public function createMenu(Player $player){
        $form = $this->getMain()->getForm()->createSimpleForm(
            function (Player $player, array $result){
                if ($result === null) return;

                switch ($result){
                    case BanForm::CLOSE_BUTTON:
                    return;

                    case BanForm::FOREVER_BUTTON:
                    $this->getMain()->getForeverBan()->createForever($player);
                    return;

                    case BanForm::TIME_LIMIT_BUTTON:
                    $this->getMain()->getTimeLimitBan()->createTimeLimit($player);
                    return;

                    case BanForm::ABOUT:
                    $this->getMain()->getAbout()->createAbout($player);
                    return;
                }
            }
        );

        $form->setTitle("MazaiBan Form");
        $form->setContent("選択してください");
        $form->addButton("閉じる");
        $form->addButton("永久BAN");
        $form->addButton("期限付きBAN");
        $form->addButton("処罰処理に関して");

        $form->sendToPlayer($player);
    }

    /**
     * @return Main
     */
    public function getMain(): Main{
        return $this->main;
    }
}
