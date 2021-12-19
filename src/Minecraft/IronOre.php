<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class IronOre extends Block
{
    protected $name = 'minecraft:iron_ore';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('iron_ore');
    }
}
