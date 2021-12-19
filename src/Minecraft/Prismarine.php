<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Prismarine extends Block
{
    protected $name = 'minecraft:prismarine';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('prismarine');
    }
}
