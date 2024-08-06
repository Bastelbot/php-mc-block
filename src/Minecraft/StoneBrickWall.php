<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StoneBrickWall extends Block
{
    protected $name = 'minecraft:stone_brick_wall';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stone_bricks');
    }
}
