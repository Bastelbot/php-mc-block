<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class StrippedOakWood extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('stripped_oak_log_top');
    }
}
