<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CobblestoneWall extends Block
{
    protected $name = 'minecraft:cobblestone_wall';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('cobblestone');
    }
}
