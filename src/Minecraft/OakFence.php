<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OakFence extends Block
{
    protected $name = 'minecraft:oak_fence';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('oak_planks');
    }
}
