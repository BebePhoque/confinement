<?php

namespace BebePhoque\Ici;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\plugin\PluginBase;

class Main extends Pluginbase {
	
	public function onEnable(){
	}
	
	public function onCommand(CommandSender $player, Command $cmd, string $label, array $args) :bool {
		switch($cmd->getName()){
			case "ici":
				if($player instanceof Player){
					$player->sendMessage("§4RESTE CHEZ TOI BATARD, §csa fera 200 morts de moins.");
				}
			break;
		}
		return true;
	}
}
