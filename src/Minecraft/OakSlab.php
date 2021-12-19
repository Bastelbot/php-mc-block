<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OakSlab extends Block
{
    protected $name = 'minecraft:oak_slab';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('oak_planks');
    }
}
