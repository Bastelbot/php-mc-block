<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DeepslateTileStairs extends Block
{
    protected $name = 'minecraft:deepslate_tile_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('deepslate_tiles');
    }
}
