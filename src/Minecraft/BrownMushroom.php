<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BrownMushroom extends Block
{
    protected $name = 'minecraft:brown_mushroom';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('brown_mushroom');
    }
}
