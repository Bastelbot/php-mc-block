<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MossyCobblestoneStairs extends Block
{
    protected $name = 'minecraft:mossy_cobblestone_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('mossy_cobblestone');
    }
}
