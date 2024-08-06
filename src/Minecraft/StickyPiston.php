<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StickyPiston extends Block
{
    protected $name = 'minecraft:sticky_piston';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('piston_top_sticky');
    }
}
