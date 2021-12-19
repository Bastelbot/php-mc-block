<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OakFenceGate extends Block
{
    protected $name = 'minecraft:oak_fence_gate';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('oak_planks');
    }
}
