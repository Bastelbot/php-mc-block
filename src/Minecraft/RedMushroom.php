<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class RedMushroom extends Block
{
    protected $name = 'minecraft:red_mushroom';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('red_mushroom');
    }
}
