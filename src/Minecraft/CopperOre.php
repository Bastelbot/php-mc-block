<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CopperOre extends Block
{
    protected $name = 'minecraft:copper_ore';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('copper_ore');
    }
}
