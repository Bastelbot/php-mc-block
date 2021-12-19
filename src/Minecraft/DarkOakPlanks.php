<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DarkOakPlanks extends Block
{
    protected $name = 'minecraft:dark_oak_planks';

    public function initTexture ()
    {
        return $this->loadTexture('dark_oak_planks');
    }
}
