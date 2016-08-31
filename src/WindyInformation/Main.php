<?php
namespace WindyInformations;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener {
	
	public function onEnable( ) {
	        $this->getServer( )->getPluginManager( )->registerEvents($this, $this);
	       	$this->saveDefaultConfig();
                $this->getLogger( )->info(TextFormat::GREEN . "Windy Information Enabled - Izual");
        }
}
