<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class OakLog extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('oak_log_top');
    }
}
