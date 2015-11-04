<?php

namespace MA\commands;

use MA\bases\BaseCommand; // Adding right after this
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
/* Todo: 
 * Make BaseCommand in bases folder (Soon to come)
 * Making player get money (Soon to come)
 * ...
 *
 * Finished:
 * Giving permissions
 * When a player types a random player it says an error
 * ...
 *
 * Why I contributed(@CavinMiana):
 * He has not made any changes yet so yeah.
 * 
 */
class AddMoneyCommand extends BaseCommand {
  
  public function onCommand(CommandSender $issuer, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case "addmoney":
        if($issuer->hasPermission("money.command") !== true && $issuer->hasPermission("money.command.addmoney"){
          $issuer->sendMessage("You dont have permission for this!");
          return true;
        }
        $moneytarget = $this->plugin->getServer()->getPlayer($args[0]);
        if($moneytarget === null) {
          $issuer->sendMessage("Invalid Target?!");
          return true;
        }
    }
}
