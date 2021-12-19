<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OakTrapdoor extends Block
{
    protected $name = 'minecraft:oak_trapdoor';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('oak_trapdoor');
    }
}
