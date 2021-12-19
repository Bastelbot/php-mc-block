<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class ChiseledStoneBricks extends Block
{
    protected $name = 'minecraft:chiseled_stone_bricks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('chiseled_stone_bricks');
    }
}
