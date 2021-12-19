<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class LapisOre extends Block
{
    protected $name = 'minecraft:lapis_ore';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('lapis_ore');
    }
}
