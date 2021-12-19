<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SprucePlanks extends Block
{
    protected $name = 'minecraft:spruce_planks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('spruce_planks');
    }
}
