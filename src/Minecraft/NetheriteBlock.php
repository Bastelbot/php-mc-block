<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class NetheriteBlock extends Block
{
    protected $name = 'minecraft:netherite_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('netherite_block');
    }
}
