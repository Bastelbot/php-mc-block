<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class StrippedDarkOakWood extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('stripped_dark_oak_log_top');
    }
}
