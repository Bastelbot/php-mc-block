<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class DarkOakLog extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('dark_oak_log_top');
    }
}
