<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class JungleFence extends Block
{
    protected $name = 'minecraft:jungle_fence';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('jungle_planks');
    }
}
