<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CrimsonFenceGate extends Block
{
    protected $name = 'minecraft:crimson_fence_gate';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('crimson_planks');
    }
}
