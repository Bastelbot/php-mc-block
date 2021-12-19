<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Cobblestone extends Block
{
    protected $name = 'minecraft:cobblestone';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('cobblestone');
    }
}
