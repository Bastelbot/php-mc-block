<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class HoneyBlock extends Block
{
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('honey_block_top');
    }
}
