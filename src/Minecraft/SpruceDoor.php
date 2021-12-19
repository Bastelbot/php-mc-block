<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SpruceDoor extends Block
{
    protected $name = 'minecraft:spruce_door';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('spruce_door_bottom');
    }
}
