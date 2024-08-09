<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class Furnace extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('furnace_front_on');
    }
}
