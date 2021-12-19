<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Fire extends Block
{
    protected $name = 'minecraft:fire';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('fire_0');
    }
}
