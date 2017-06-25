<?php
namespace padreon;
 
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\ItemBlock;
use pocketmine\command\PluginCommand;
use pocketmine\permission\Permission;
use pocketmine\utils\TextFormat;
use pocketmine\command\CommandExecutor;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
 
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
        $trapc = 146; //Id Trapchest
        if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $trapc)) $ev->setCancelled();
 
        }
	public function onInteract(PlayerInteractEvent $ev){
        $endchest = 130; //EnderChest
        if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $endchest)) $ev->setCancelled();
 
        }
	public function onInteract(PlayerInteractEvent $ev){
        $beacon = 138; //beacon
        if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $beacon)) $ev->setCancelled();
 
        }
	public function onInteract(PlayerInteractEvent $ev){
        $dropper = 125; //dropper
        if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $dropper)) $ev->setCancelled();
 
        }
	public function onInteract(PlayerInteractEvent $ev){
        $dispenser = 23; //dispenser
        if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $dispenser)) $ev->setCancelled();
 
        }
	public function onInteract(PlayerInteractEvent $ev){
        $hopper = 154; //Id Hopper
        if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $hopper)) $ev->setCancelled();
 
        }
		public function onInteract(PlayerInteractEvent $ev){
        $anvil = 145; //Id Anvil
        if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $anvil)) $ev->setCancelled();
 
        }
	public function onInteract(PlayerInteractEvent $ev){
        $brewing = 379; //Id BrewingStand
        if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $brewing)) $ev->setCancelled();

	
		
		
		
		
