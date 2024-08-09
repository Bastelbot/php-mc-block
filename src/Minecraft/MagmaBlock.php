<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class MagmaBlock extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('magma');
    }
}
