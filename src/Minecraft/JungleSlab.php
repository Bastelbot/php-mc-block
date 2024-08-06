<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class JungleSlab extends Block
{
    protected $name = 'minecraft:jungle_slab';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('jungle_planks');
    }
}
