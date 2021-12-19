<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class RedMushroomBlock extends Block
{
    protected $name = 'minecraft:red_mushroom_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('red_mushroom_block');
    }
}
