<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MossyCobblestone extends Block
{
    protected $name = 'minecraft:mossy_cobblestone';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('mossy_cobblestone');
    }
}
