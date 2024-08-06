<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class JunglePlanks extends Block
{
    protected $name = 'minecraft:jungle_planks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('jungle_planks');
    }
}
