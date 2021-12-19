<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CobblestoneStairs extends Block
{
    protected $name = 'minecraft:cobblestone_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('cobblestone');
    }
}
