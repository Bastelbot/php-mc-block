<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class RedstoneOre extends Block
{
    protected $name = 'minecraft:redstone_ore';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('redstone_ore');
    }
}
