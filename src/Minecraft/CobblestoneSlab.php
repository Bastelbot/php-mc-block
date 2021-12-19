<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CobblestoneSlab extends Block
{
    protected $name = 'minecraft:cobblestone_slab';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('cobblestone');
    }
}
