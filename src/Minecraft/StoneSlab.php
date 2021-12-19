<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StoneSlab extends Block
{
    protected $name = 'minecraft:stone_slab';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stone');
    }
}
