<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class IronBlock extends Block
{
    protected $name = 'minecraft:iron_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('iron_block');
    }
}
