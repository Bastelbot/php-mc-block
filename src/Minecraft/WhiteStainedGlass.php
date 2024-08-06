<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class WhiteStainedGlass extends Block
{
    protected $name = 'minecraft:white_stained_glass';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('white_stained_glass');
    }
}
