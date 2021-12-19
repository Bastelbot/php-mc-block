<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BrownMushroomBlock extends Block
{
    protected $name = 'minecraft:brown_mushroom_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('brown_mushroom_block');
    }
}
