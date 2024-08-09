<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class AcaciaFence extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('acacia_planks');
    }
}
