<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Diorite extends Block
{
    protected $name = 'minecraft:diorite';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('diorite');
    }
}
