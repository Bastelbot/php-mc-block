<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MinecraftGoldOre extends Block
{
    protected $name = 'minecraft:gold_ore';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('gold_ore');
    }
}
