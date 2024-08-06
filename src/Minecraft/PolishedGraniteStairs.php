<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PolishedGraniteStairs extends Block
{
    protected $name = 'minecraft:polished_granite_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('polished_granite');
    }
}
