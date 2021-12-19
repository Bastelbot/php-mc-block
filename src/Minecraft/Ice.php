<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Ice extends Block
{
    protected $name = 'minecraft:ice';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('ice');
    }
}
