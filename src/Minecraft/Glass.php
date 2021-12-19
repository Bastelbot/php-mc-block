<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Glass extends Block
{
    protected $name = 'minecraft:glass';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('glass');
    }
}
