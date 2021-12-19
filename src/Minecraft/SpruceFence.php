<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SpruceFence extends Block
{
    protected $name = 'minecraft:spruce_fence';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('spruce_planks');
    }
}
