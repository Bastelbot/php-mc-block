<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StoneBrickSlab extends Block
{
    protected $name = 'minecraft:stone_brick_slab';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stone_bricks');
    }
}
