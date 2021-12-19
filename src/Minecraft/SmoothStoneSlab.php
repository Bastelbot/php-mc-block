<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SmoothStoneSlab extends Block
{
    protected $name = 'minecraft:smooth_stone_slab';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('smooth_stone');
    }
}
