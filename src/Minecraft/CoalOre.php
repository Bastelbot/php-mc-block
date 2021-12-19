<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CoalOre extends Block
{
    protected $name = 'minecraft:coal_ore';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('coal_ore');
    }
}
