<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Mycelium extends Block
{
    protected $name = 'minecraft:mycelium';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('mycelium_top');
    }
}
