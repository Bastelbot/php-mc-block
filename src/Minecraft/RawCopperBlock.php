<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class RawCopperBlock extends Block
{
    protected $name = 'minecraft:raw_copper_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('raw_copper_block');
    }
}
