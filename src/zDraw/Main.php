<?php

namespace zDraw;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {
    
    public function onEnable(){
        
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
        switch($cmd->getName()){
            case "gm":
                if($sender->hasPermission("gm.use")){
                    if(isset($args[0])){
                        switch(strtolower($args[0])){
                            case "0":
                                $sender->getPlayer()->setGamemode(0);
                                $sender->sendMessage("§aModo de jogo alterado para Survival");
                            break;
                            
                            case "1":
                                $sender->getPlayer()->setGamemode(1);
                                $sender->sendMessage("§aModo de jogo alterado para Creativo");
                            break;
                            
                            case "2":
                                $sender->getPlayer()->setGamemode(2);
                                $sender->sendMessage("§aModo de jogo alterado para Aventura");
                            break;
                            
                            case "3":
                                $sender->getPlayer()->setGamemode(3);
                                $sender->sendMessage("§aModo de jogo alterado para Espectador");
                            break;
                        }
                    } else {
                        $sender->sendMessage("§cUtilize /gm <0, 1, 2, 3>");
                    }
                } else {
                    $sender->sendMessage("§c(!) Voce não tem permissão para usar!");
                }
                
        }
      return true;
    }
}