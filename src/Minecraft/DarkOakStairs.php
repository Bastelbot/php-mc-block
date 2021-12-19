<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DarkOakStairs extends Block
{
    protected $name = 'minecraft:dark_oak_stairs';

    public function initTexture ()
    {
        return $this->loadTexture('dark_oak_planks');
    }
}
