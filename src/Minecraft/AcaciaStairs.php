<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class AcaciaStairs extends Block
{
    protected $name = 'minecraft:acacia_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('acacia_planks');
    }
}
