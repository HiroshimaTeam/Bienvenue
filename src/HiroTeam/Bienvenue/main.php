<?php
#██╗░░██╗██╗██████╗░░█████╗░████████╗███████╗░█████╗░███╗░░░███╗
#██║░░██║██║██╔══██╗██╔══██╗╚══██╔══╝██╔════╝██╔══██╗████╗░████║
#███████║██║██████╔╝██║░░██║░░░██║░░░█████╗░░███████║██╔████╔██║
#██╔══██║██║██╔══██╗██║░░██║░░░██║░░░██╔══╝░░██╔══██║██║╚██╔╝██║
#██║░░██║██║██║░░██║╚█████╔╝░░░██║░░░███████╗██║░░██║██║░╚═╝░██║
#╚═╝░░╚═╝╚═╝╚═╝░░╚═╝░╚════╝░░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚═╝░░░░░╚═╝
namespace HiroTeam\Bienvenue;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;


class main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        $commandName = $command->getName();
        if($sender instanceof Player){ //si sender= l'envoyeur de la commande est un Player psq la console ne peut pas avoir de perm
            if(strtolower($commandName) === 'bienvenue') { //strtolower = mettre la commande en minuscule
                $sender->sendMessage('Bienvenue à toi sur cette magnifique vidéo !');
                return true;
            }
        }
        return true;
    }
}