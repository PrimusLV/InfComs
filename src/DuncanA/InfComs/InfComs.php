<?php

namespace DuncanA\InfComs;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class InfComs extends PluginBase{

   public function onEnable () {
         $this->getLogger()->info("onEnable() has been called!");
   }
   
   public function onDisable() {
         $this->getLogger()->info("onDisable() has been called!");
   }
   
   public function onCommand(CommandSender $sender, Command $command, $label, array $args){
       switch($command->getName()){
          case "quit":
            if($sender instanceof Player){
               if($sender->hasPermission("myplugin.quit"){
                  $sender->kick();
             }else{
             	$sender->sendMessage("You don't have permission!");
             	return true;
             }
          }else{
          	$sender->sendMessage("Please run this command in-game!");
          	return true;
          }
          case "info"
          if($sender->hasPermission("myplugin.info")){
          	$sender->sendMessage("Info Info Info...");
          	$sender->sendMessage("Info Info Info...");
          	$sender->sendMessage("Info Info Info...");
          	return true;
          }else{
          	$sender->sendMessage("You don't have permission!");
          	return true;
          }
       }
    }
  }
}
