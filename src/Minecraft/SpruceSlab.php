<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SpruceSlab extends Block
{
    protected $name = 'minecraft:spruce_slab';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('spruce_planks');
    }
}
