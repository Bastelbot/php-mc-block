<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MossyStoneBrickSlab extends Block
{
    protected $name = 'minecraft:mossy_stone_brick_slab';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('mossy_stone_bricks');
    }
}
