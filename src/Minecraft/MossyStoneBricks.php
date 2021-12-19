<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MossyStoneBricks extends Block
{
    protected $name = 'minecraft:mossy_stone_bricks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('mossy_stone_bricks');
    }
}
