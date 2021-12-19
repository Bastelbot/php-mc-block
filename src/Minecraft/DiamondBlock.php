<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DiamondBlock extends Block
{
    protected $name = 'minecraft:diamond_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('diamond_block');
    }
}
