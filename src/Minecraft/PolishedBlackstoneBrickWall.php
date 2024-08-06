<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PolishedBlackstoneBrickWall extends Block
{
    protected $name = 'minecraft:polished_blackstone_brick_wall';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('polished_blackstone_bricks');
    }
}
