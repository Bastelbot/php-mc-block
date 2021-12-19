<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Lava extends Block
{
    protected $name = 'minecraft:lava';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('lava_still');
    }
}
