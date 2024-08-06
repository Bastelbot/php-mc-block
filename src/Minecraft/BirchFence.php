<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BirchFence extends Block
{
    protected $name = 'minecraft:birch_fence';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('birch_planks');
    }
}
