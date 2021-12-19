<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DripstoneBlock extends Block
{
    protected $name = 'minecraft:dripstone_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('dripstone_block');
    }
}
