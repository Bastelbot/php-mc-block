<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MinecraftBricks extends Block
{
    protected $name = 'minecraft:bricks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('brick');
    }
}
