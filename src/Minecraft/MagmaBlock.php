<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MagmaBlock extends Block
{
    protected $name = 'minecraft:magma_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('magma');
    }
}
