<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CrimsonFence extends Block
{
    protected $name = 'minecraft:crimson_fence';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('crimson_planks');
    }
}
