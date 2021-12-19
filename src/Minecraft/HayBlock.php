<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class HayBlock extends Block
{
    protected $name = 'minecraft:hay_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('hay_block_side');
    }
}
