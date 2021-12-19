<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class EmeraldOre extends Block
{
    protected $name = 'minecraft:emerald_ore';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('emerald_ore');
    }
}
