<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BirchFenceGate extends Block
{
    protected $name = 'minecraft:birch_fence_gate';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('birch_planks');
    }
}
