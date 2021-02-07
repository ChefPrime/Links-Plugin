<?php

declare(strict_types=1);

namespace WolfDen133\links;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        switch ($command->getName()){
            case "links":
                $sender->sendMessage("<§a=====§l§3LINKS§r§a=====§f>\n\n §7> §l§cBuyCraft: §r§b§ohttps://vodakmc.tebex.io/\n §7> §l§cDiscord: §r§b§ohttps://discord.gg/fppaCN82SN\n §7> §l§cVote: §r§o§7 Coming soon\n\n §l<§r§a==============§f§l>§r");
        }
        return true;
    }

}