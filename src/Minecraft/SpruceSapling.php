<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SpruceSapling extends Block
{
    protected $name = 'minecraft:spruce_sapling';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('spruce_sapling');
    }
}
