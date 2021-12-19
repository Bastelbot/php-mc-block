<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class YellowWool extends Block
{
    protected $name = 'minecraft:yellow_wool';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('yellow_wool');
    }
}
