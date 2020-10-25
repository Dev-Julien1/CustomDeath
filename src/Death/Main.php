<?php

namespace Death;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Death on !");
    }
    public function onDeath(PlayerDeathEvent $event) {
        $sender = $event->getPlayer();
        $name = $sender->getName();
        $event->setDeathMessage("§c$name est mort");
    }
}