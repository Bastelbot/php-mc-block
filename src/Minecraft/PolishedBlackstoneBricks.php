<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PolishedBlackstoneBricks extends Block
{
    protected $name = 'minecraft:polished_blackstone_bricks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('polished_blackstone_bricks');
    }
}
