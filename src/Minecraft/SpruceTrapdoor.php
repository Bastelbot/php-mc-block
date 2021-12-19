<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SpruceTrapdoor extends Block
{
    protected $name = 'minecraft:spruce_trapdoor';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('spruce_trapdoor');
    }
}
