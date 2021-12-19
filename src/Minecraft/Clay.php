<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Clay extends Block
{
    protected $name = 'minecraft:clay';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('clay');
    }
}
