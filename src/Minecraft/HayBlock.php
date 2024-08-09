<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class HayBlock extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('hay_block_side');
    }
}
