<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StoneBricks extends Block
{
    protected $name = 'minecraft:stone_bricks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stone_bricks');
    }
}
