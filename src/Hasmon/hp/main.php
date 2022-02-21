<?php

declare(strict_types=1);

namespace Hasmon\hp;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\player\Player;

class main extends PluginBase implements Listener{
  protected function onEnable(): void{
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getServer()->getLogger()->info('hp태그 실행완료!');
  }
  public function onJoin(PlayerJoinEvent $event): void{
    $player = $event->getPlayer();
    $name = $player->getName();
    $health = $player->getHealth();
    $player->setNametag('♡'.$health.'\n'.$name);
  }
}
