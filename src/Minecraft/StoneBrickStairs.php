<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StoneBrickStairs extends Block
{
    protected $name = 'minecraft:stone_brick_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stone_bricks');
    }
}
