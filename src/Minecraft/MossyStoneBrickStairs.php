<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MossyStoneBrickStairs extends Block
{
    protected $name = 'minecraft:mossy_stone_brick_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('mossy_stone_bricks');
    }
}
