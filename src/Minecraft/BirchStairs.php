<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BirchStairs extends Block
{
    protected $name = 'minecraft:birch_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('birch_planks');
    }
}
