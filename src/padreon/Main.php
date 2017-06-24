<?php
namespace padreon;
 
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\ItemBlock;
 
class Main extends PluginBase implements Listener{
       
 
        public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
        }
        public function onEnable(){
            $this->getServer()->getPluginManager()->registerEvents($this, $this);
                    $this->getLogger()->info("Enabled Plugin");
        }
        public function onDisable(){
                    $this->getLogger()->info("Plugin Disabled");
        }
 
   
        public function onInteract(PlayerInteractEvent $ev){
        $chest = 54; //Id Chest
        if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $chest)) $ev->setCancelled();
 
        }
        public function onInteract(PlayerInteractEvent $ev){
         $trapc = 146; //id trapchest
         if(($ev->getPlayer()->getGamemode() ===1) && ($ev->getBlock()->getId() === $trapc)) $ev->setCancelled();}
 
        public function onInteract(PlayerInteractEvent $ev){
         $endchest = 130; //id Ender Chest
         if(($ev->getPlayer()->getGamemode() ===1) && ($ev->getBlock()->getId() === $endchest)) $ev->setCancelled();}
 
}
