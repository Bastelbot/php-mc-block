<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Sponge extends Block
{
    protected $name = 'minecraft:sponge';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('sponge');
    }
}
