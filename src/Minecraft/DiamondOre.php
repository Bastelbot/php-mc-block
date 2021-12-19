<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MinecraftDiamondOre extends Block
{
    protected $name = 'minecraft:diamond_ore';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('diamond_ore');
    }
}
