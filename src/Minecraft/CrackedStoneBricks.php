<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CrackedStoneBricks extends Block
{
    protected $name = 'minecraft:cracked_stone_bricks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('cracked_stone_bricks');
    }
}
