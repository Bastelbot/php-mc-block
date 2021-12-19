<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DarkOakSlab extends Block
{
    protected $name = 'minecraft:dark_oak_slab';

    public function initTexture ()
    {
        return $this->loadTexture('dark_oak_planks');
    }
}
