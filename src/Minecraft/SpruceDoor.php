<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class SpruceDoor extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('spruce_door_bottom');
    }
}
