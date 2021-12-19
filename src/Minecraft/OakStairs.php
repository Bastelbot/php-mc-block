<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OakStairs extends Block
{
    protected $name = 'minecraft:oak_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('oak_planks');
    }
}
