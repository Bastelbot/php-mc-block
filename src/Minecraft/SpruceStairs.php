<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SpruceStairs extends Block
{
    protected $name = 'minecraft:spruce_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('spruce_planks');
    }
}
