<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BirchPlanks extends Block
{
    protected $name = 'minecraft:birch_planks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('birch_planks');
    }
}
