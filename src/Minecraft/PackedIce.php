<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PackedIce extends Block
{
    protected $name = 'minecraft:packed_ice';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('packed_ice');
    }
}
