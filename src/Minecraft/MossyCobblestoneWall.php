<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MossyCobblestoneWall extends Block
{
    protected $name = 'minecraft:mossy_cobblestone_wall';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('mossy_cobblestone');
    }
}
