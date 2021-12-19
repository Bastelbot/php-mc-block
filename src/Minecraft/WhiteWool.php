<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class WhiteWool extends Block
{
    protected $name = 'minecraft:white_wool';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('white_wool');
    }
}
