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
         $trapchest = 146; //trapchest 
         if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $trapchest)) $ev->setCancelled();

        }
        public function onInteract(PlayerInteractEvent $ev){
         $endchest = 130; // end chest
         if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $endchest)) $ev->setCancelled();
         
        }
        public function onInteract(PlayerInteractEvent $ev){
         $dropper = 125; // Dropper ID
         if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $dropper)) $ev->setCancelled();
         
         }
        public function onInteract(PlayerInteractEvent $ev){
         $beacon = 138; // Beacon
         if(($ev->getPlayer()->getGamemode() === 1) && ($ev->geyBlock()->getId() === $beacon)) $ev->setCancelled();
         
         }
        public function onInteract(PlayerInteractEvent $ev){
         $dispenser = 23; //Item Id Dispenser
         if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $dispenser)) $ev->setCancelled();
         
         }
 
