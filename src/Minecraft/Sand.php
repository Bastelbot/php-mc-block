<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Sand extends Block
{
    protected $name = 'minecraft:sand';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('sand');
    }
}
