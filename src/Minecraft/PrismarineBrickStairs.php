<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PrismarineBrickStairs extends Block
{
    protected $name = 'minecraft:prismarine_brick_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('prismarine_bricks');
    }
}
