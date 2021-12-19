<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OakPlanks extends Block
{
    protected $name = 'minecraft:oak_planks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('oak_planks');
    }
}
