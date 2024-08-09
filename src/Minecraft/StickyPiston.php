<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class StickyPiston extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('piston_top_sticky');
    }
}
