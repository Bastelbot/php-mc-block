<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Furnace extends Block
{
    protected $name = 'minecraft:furnace';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('furnace_front_on');
    }
}
